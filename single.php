<?php get_header(); ?>

<div class="layout-content content-wrap clearfix single-post">
  <div id="content" class="layout-main">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
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
          <?php the_content(); ?>
        </div>
      </div>
      <div class="share-area">
        <!-- JiaThis Button BEGIN -->
        <div class="jiathis_style">
          <span class="jiathis_txt">分享到：</span>
          <a class="jiathis_button_qzone"></a>
          <a class="jiathis_button_tsina"></a>
          <a class="jiathis_button_tqq"></a>
          <a class="jiathis_button_renren"></a>
          <a class="jiathis_button_kaixin001"></a>
          <a class="jiathis_button_weixin"></a>
          <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
          <a class="jiathis_counter_style"></a>
        </div>
        <script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js?uid=1405568509408801" charset="utf-8"></script>
        <!-- JiaThis Button END -->
      </div>

      <?php comments_template('', true); ?>
    </div>
    <?php endwhile; endif; ?>
  </div>

<?php get_footer(); ?>