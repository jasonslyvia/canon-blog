<?php get_header(); ?>

<div class="layout-content content-wrap clearfix single-post">
  <div id="content" class="layout-main">

    <h1><?php single_cat_title( '', true ); ?></h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="entry" id="post-<?php the_ID(); ?>">
      <div class="entry-meta">  
        <h2 class="entry-title">
          <a href="<?php the_permalink(); ?>" rel="bookmark" title="详细阅读：<?php the_title();?>"><?php the_title(); ?></a>
        </h2>
        
        <span class="entry-author"><?php the_author(); ?></span>
        <span class="entry-category"><?php the_category(','); ?></span>
        <span class="entry-date"><?php the_time('Y/m/d'); ?></span>
        <span class="entry_comment"><?php comments_popup_link('0', '1', '%', '', '无'); ?></span>
      </div>
      <div class="entry-content">
        <div style="color: #666666;">
          <p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(730, 250), array('width' => 730, 'height' => 250, 'class' => 'alignnone')) ?></a></p>
          <p><?php echo mb_substr(get_the_content(), 0, 200).'[...]'; ?></p>
          <p><a href="<?php the_permalink(); ?>" class="more-link">详细阅读 &raquo;</a></p>
        </div>
      </div>
    </div>
    <?php endwhile; else: ?>
    <?php endif; ?>
    <div class="page-navi clearfix">
      <span class="next"><?php next_posts_link('下一页 &raquo;', 0); ?></span>
      <span class="previous"><?php next_posts_link('上一页一页 &laquo;', 0); ?></span>
    </div>
  </div>

<?php get_footer(); ?>