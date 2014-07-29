<?php

function remove_menus() {
    global $menu;
    $restricted = array(
        __('Dashboard'),
        __('Media'),
        __('Pages'),
        __('Appearance'),
        __('Tools'),
        __('Users'),
        __('Comments'),
        __('Plugins')
    );
    end ($menu);
    while (prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(strpos($value[0], '<') === FALSE) {
            if(in_array($value[0] != NULL ? $value[0]:"" , $restricted)){
                unset($menu[key($menu)]);
            }
        }else {
        $value2 = explode('<', $value[0]);
            if(in_array($value2[0] != NULL ? $value2[0]:"" , $restricted)){
                unset($menu[key($menu)]);
            }
        }
    }
}

if (is_admin()){
    // 屏蔽左侧菜单
    add_action('admin_menu', 'remove_menus');
}

function wp_hide_nag() {
    remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action('admin_menu','wp_hide_nag');

add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

function remove_wp_logo( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'wp-logo' );
}


//自定义title
add_action('wp_title', 'rw_title', 10, 3);
function rw_title($title, $sep, $direction){
    global $page, $paged;

    if ($direction == 'right') {
        $title .= get_bloginfo('name');
    }
    else{
        $title = get_bloginfo('name').$title;
    }

    $desc = get_bloginfo('description', 'display');
    if ($desc && (is_home() || is_front_page())) {
        $title .= "{$sep}{$desc}";
    }

    if ($paged >=2 || $page >= 2 && !is_page('profile')) {
        $title .= "{$sep}"."第".max($page, $paged)."页";
    }

    return $title;
}


function get_first_image($img_position=0) {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][$img_position];
    if(empty($first_img)){
        return false;
    }
    return $first_img;
}
?>