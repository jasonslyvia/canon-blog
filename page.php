<?php get_header(); ?>

<div class="layout-content content-wrap clearfix single-post">
  <div id="content" class="layout-main">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="entry" id="post-<?php the_ID(); ?>">
      <div class="entry-meta">
        <h2 class="entry-title"><?php the_title(); ?></h2>

        <span class="entry-author"><?php the_author(); ?></span>
        <span class="entry-category"><?php the_category(','); ?></span>
        <span class="entry-date"><?php the_time('Y/m/d'); ?></span>
        <span class="entry_comment"><?php comments_popup_link('0', '1', '%', '', '无'); ?></span>
      </div>
      <div class="entry-content">
        <div style="color: #666666;">
          <?php
            if (is_current_user_admin()) {
                edit_post_link('编辑', '<p>', '</p>');
            }
            the_content();
          ?>
        </div>
      </div>

      <?php comments_template('', true); ?>
    </div>
    <?php endwhile; endif; ?>
  </div>

<?php get_footer(); ?>