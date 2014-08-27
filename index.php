<?php get_header(); ?>
    <!-- content -->
    <div class="layout-content content-wrap clearfix">
      <div id="content" class="layout-main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="entry" id="post-<?php the_ID(); ?>">
          <div class="entry-meta">
            <span class="entry-author-gravatar">
              <img src="http://tp2.sinaimg.cn/1630897653/50/1291729198/1" class="avatar avatar-55 photo" height="55" width="55">
            </span>
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
              <?php if (get_first_image()): ?>
              <p><a href="<?php the_permalink(); ?>"><img width="730" src="<?php echo get_bloginfo('template_url').'/timthumb.php?src='.get_first_image().'&zc=1&w=730'; ?>" /></a></p>
              <?php endif ?>
              <p><?php echo mb_substr(preg_replace('/\[[^]]*\]/', '', strip_tags(get_the_content())), 0, 200).'[...]'; ?></p>
              <p><a href="<?php the_permalink(); ?>" class="more-link">详细阅读 &raquo;</a></p>
            </div>
          </div>
        </div>
        <?php endwhile; else: ?>
        <?php endif; ?>

        <div class="index-ad">
          <script type="text/javascript">
          /*728*90 创建于 2014-08-12*/
          var cpro_id = "u1656031";
          </script>
          <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
        </div>
‍
        <div class="page-navi clearfix">
          <span class="next"><?php next_posts_link('下一页 &raquo;', 0); ?></span>
          <span class="previous"><?php next_posts_link('上一页 &laquo;', 0); ?></span>
        </div>
      </div>


 <?php get_footer(); ?>