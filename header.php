<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title><?php bloginfo('title'); ?></title>
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
        <li class="current_page_item"> <a href="">首页</a> </li>
        <li class="page_item"><a href="">关于我们</a></li>
        <li class="page_item"><a href="">加入我们</a></li>
      </ul>
    </div>