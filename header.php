<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title><?php wp_title("_", true, 'right'); ?></title>
<meta name="robots" content="index,follow" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<meta name="google" content="notranslate" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />
<?php wp_head(); ?>
</head>
<body class="aliued">
  <div class="layout-wrap">
    <!-- header -->
    <div class="layout-header content-wrap clearfix">
      <h1 class="header-logo">
        <a href="/"><?php bloginfo('title'); ?></a>
      </h1>
      <ul class="header-navi clearfix">
        <li class="<?php if (is_index()) echo 'current_'; ?>page_item"> <a href="/">首页</a></li>
<?php $pages = get_pages(array("sort_column" => "menu_order"));
    if (count($pages)) {
        foreach ($pages as $page) {
?>
<li class="<?php if (is_page($page->ID)) echo 'current_'; ?>page_item">
    <a href="/?page_id=<?php echo $page->ID; ?>">
        <?php echo $page->post_title; ?>
    </a>
</li>
<?php
        }
    }
?>
      </ul>
    </div>