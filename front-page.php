<?php get_header(); ?>

<img src="<?php echo get_template_directory_uri(); ?>/header-1500x600.jpg" width="1500px" height="600px" alt="" class="largeheader">

<div class="topmenu">
<div class="container">

  <div class="link">
    <a href="<?php echo get_permalink( get_page_by_title( 'ブログ') ->ID ); ?>" >
      <i class="fas fa-edit"></i>ブログ
    </a>
  </div>

  <div class="link">
    <a href="<?php echo get_permalink( get_page_by_title( 'サイトについて') ->ID ); ?>" >
    <i class="fas fa-info-circle"></i>サイトについて
  </a>
</div>

<div class="link">
  <a href="<?php echo get_permalink( get_page_by_title( 'お問い合わせ') ->ID ); ?>" >
  <i class="fas fa-envelope"></i>お問い合わせ
</a>
</div>

</div>
</div>

<?php get_footer(); ?>
