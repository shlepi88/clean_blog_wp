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
          <p class="post-meta">Posted by
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
              <?php the_author(); ?>
            </a>
            on <?php echo get_the_date(); ?></p>
        </div>
        <hr>
        <?php endwhile; ?>
          <?php else : ?>
          <h2><?php __('No Posts Found!') ?></h2>
        <?php endif; ?>
      
      </div>
    </div>
  </div>

  <hr>