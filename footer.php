      <!-- sidebar -->
      <div class="layout-sub">
        <ul>
          <li id="search-3" class="widget widget_search"><form role="search" method="get" id="searchform" class="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div>
                <label class="screen-reader-text" for="s">搜索：</label>
                <input type="text" value="" name="s" id="s" />
                <input type="submit" id="searchsubmit" value="搜索" />
              </div>
            </form>
          </li>
          <li id="text-4" class="widget widget_text">
            <h2 class="widgettitle">微博</h2>
            <div class="textwidget">
              <iframe width="100%" height="400" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=400&fansRow=1&ptype=1&speed=0&skin=1&isTitle=0&noborder=0&isWeibo=1&isFans=0&uid=1630897653&verifier=d3636f5c&dpc=1"></iframe>
            </div>
          </li>
          <li id="categories-410708512" class="widget widget_categories">
            <h2 class="widgettitle">文章分类</h2>
            <ul>
              <?php wp_list_categories(array('title_li' => '')); ?>
            </ul>
          </li>
          <li id="recent-posts-2" class="widget widget_recent_entries">
            <h2 class="widgettitle">近期文章</h2>
            <ul>
            <?php $query = new WP_Query('posts_per_page=5&order_by=date');
              if (have_posts()): while(have_posts()): the_post(); ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; endif; ?>
            </ul>
          </li>
          <li id="linkcat-18" class="widget widget_links">
            <h2 class="widgettitle">友情链接</h2>
            <ul>
              <?php wp_list_bookmarks(array('title_li'=>'')); ?>
            </ul>
          </li>
          <li class="widget widget-ad">
            <script type="text/javascript">
              /*120*600 创建于 2014-08-12*/
              var cpro_id = "u1656053";
            </script>
            <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
          </li>
        </ul>
      </div>
    </div>

    <!-- footer -->
    <div class="layout-footer content-wrap">
      <p>&copy; 2014 摄影圈 All Rights Reserved</p>
      <p><a href="http://www.miitbeian.gov.cn/" target="_blank">京ICP备09111343号-5</a></p>
    </div>
  </div>
<?php wp_footer(); ?>
</body>
</html>