<?php get_header(); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?> /img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1><?php bloginfo('name'); ?></h1>
            <span class="subheading"><?php bloginfo('description'); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <div class="post-preview">
            <h1 class="post-title">
              <?php the_title(); ?>
            </h1>
            <div class="post-thumb">
              <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php endif; ?>
            </div>
            <p class="post-subtitle">
              <?php the_content(); ?>
            </p>
          <p class="post-meta">Posted by
            <a href="#"><?php the_author(); ?></a>
            on <?php the_date(); ?></p>
        </div>
        <div class="post-comments">
            <?php comments_template(); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

          <div class="row">
              <?php if(is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
              <?php endif; ?>
          </div>

  <?php get_footer(); ?>