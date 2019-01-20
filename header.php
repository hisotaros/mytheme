<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?>
  <?php wp_title(); ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

  <script src="https://oss.maxcdn/libs/respond.js/1.4.2/respond.min.js"></script>

  <style>
  article img {width: 100%;}
  </style>
<![endif]-->

  <link href="https://fonts.googleapis.com/css?family=Cabin|Noto+Sans+JP" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="siteinfo">
    <div class="container">
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    <p><?php bloginfo('description'); ?></p>
    </div>
  </div>

<?php if( !is_front_page() ): ?>
<?php if(get_header_image() ): ?>
<img src="<?php header_image(); ?>"
width="<?php echo get_custom_header() ->width; ?>"
height="<?php echo get_custom_header() ->height; ?>"
alt="">
<?php endif; ?>
<?php endif; ?>

  <nav>
    <div class="container">
    <?php wp_nav_menu('theme_location=navigation'); ?>
  </div>
  </nav>
  </header>
