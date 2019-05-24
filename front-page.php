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

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <div class="post-preview">
            <h2 class="post-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="post-thumb">
              <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php endif; ?>
            </div>
            <p class="post-subtitle">
              <?php the_excerpt(); ?>
            </p>
          <p class="post-meta">Posted by some
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
              <?php the_author(); ?>
            </a>
            on <?php the_date(); ?></p>
        </div>
        <hr>
        <?php endwhile; ?>
          <?php else : ?>
          <h2><?php echo __('No Posts Found!') ?></h2>
        <?php endif; ?>
        
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

<div class="container">

  <div class="row justify-content-around">
        <?php if(is_active_sidebar('sidebar')) : ?>
          <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
  </div>
  </div>
  <hr>
 
  <?php get_footer(); ?>