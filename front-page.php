<?php get_header(); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url(<?php echo get_theme_mod('heading_image', get_bloginfo('template_url') . '/img/header.jpg'); ?>); ">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1><?php echo get_theme_mod('heading', 'Clean Blog'); ?></h1>
            <span class="subheading"><?php echo get_theme_mod('heading_text', 'Just another WordPress site'); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <?php get_template_part('template-parts/posts'); ?>

  <?php get_template_part('template-parts/sidebar'); ?>
  <img src="<?php header_image(); ?>" alt="">
<?php get_footer(); ?>