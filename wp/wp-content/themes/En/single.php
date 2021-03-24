<?php get_header(); ?>
  <main id="single" class="container">
    <?php 
      if(have_posts()) :
        while(have_posts()) :
          the_post();
    ?>

    <!-- Scroll Up -->
    <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/top.png" alt="Page Top" class="scrollUp">
    </a>

    <!-- Blog Area -->
    <div class="blogArea">
      <!-- Post Header -->
      <div class="post-header">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <div class="post-meta">
          <?php echo get_the_date(); ?> [<?php the_category(', '); ?>]
        </div>
      </div>

      <!-- Post Content -->
      <div class="post-content">
        <?php if(has_post_thumbnail()) :?>
          <?php the_post_thumbnail();?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/noimage.jpg"/>
        <?php endif; ?>
        <?php the_content(); ?>
      </div>
    </div><!-- /.blogArea -->

    <!-- Post Nav -->
    <div class="post-nav">
      <div class="prev"><?php previous_post_link(); ?></div>
      <div class="next"><?php next_post_link(); ?></div>
    </div>

    <?php 
      endwhile;
      else:
    ?>

    <p>No Post.</p>

    <?php endif;?>

  </main><!-- /main -->
  
<?php get_footer(); ?>