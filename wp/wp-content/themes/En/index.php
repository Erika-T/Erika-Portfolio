<?php get_header(); ?>
  <!-- Logo Button -->
  <a href="index.html" class="logo-btn">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_sml.png" alt="Erika">
  </a>

  <!-- Scroll Up -->
  <a href="#">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/top.png" alt="Page Top" class="scrollUp">
  </a>

  <!-- Hamburger Button-->
  <!-- <button type="button" id="js-btnHamburger" class="p-hamburger" aria-controls="global-nav" aria-expanded="false" tabindex="1">
    <span class="p-hamburger__line">
      <span class="u-visuallyHidden">Open the menu</span>
    </span>
  </button> -->

  <!-- Gnav -->
  <!-- <div class="p-drawer">
    <div class="container">
      <nav id="gnav" role="navigation">
        <ul>
          <li class="gnav_menu fadeUp"><a href="about.html">ご紹介</a></li>
          <li class="gnav_menu fadeDown"><a href="projects.html">プロジェクト</a></li>
          <li class="gnav_menu fadeUp"><a href="blog.html">ブログ</a></li>
          <li class="gnav_menu fadeDown"><a href="contact.html">お問合せ</a></li>
          <li class="gnav_menu fadeUp"><a href="contact.html">English</a></li>
        </ul>
      </nav>
    </div>
  </div> -->

  <!-- Main -->
  <main id="main" class="container">
    <!-- Sidebar -->
    <?php get_sidebar(); ?>
    
    <!-- Posts -->
    <div id="blogList" class="grid-container">
      <?php 
        if(have_posts()) :
          while(have_posts()) :
            the_post();
      ?>

      <div class="post grid-item">
        <!-- Post-header -->
        <div class="post-header">
          <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
        </div><!-- /post-header -->
        
        <!-- Post-content -->
        <div class="post-content">
          <a href="<?php the_permalink(); ?>">
            <div class="hover_shine">
              <figure>
                <?php if(has_post_thumbnail()) :?>
                  <?php the_post_thumbnail(array());?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/noimage.jpg"/>
                <?php endif; ?>
              </figure>
            </div>
          </a>

          <div class="post-body">
            <?php
            //  the_excerpt(); 
              ?>
          </div>
        </div><!-- /post-content -->
      </div><!--/.post-->

      <?php 
        endwhile;
        else:
      ?>
      <p>No Post.</p>
      <?php endif;?>

    </div><!--/#blogList-->

  </main><!-- /main -->

  <!-- Post-nav -->
  <div class="post-nav container">
    <!-- cannot be used within loop -->
    <div class="prev"><?php previous_posts_link(); ?></div>
    <div class="next"><?php next_posts_link(); ?></div>
  </div><!-- /.post-nav -->

  <!-- Footer -->
  <?php get_footer(); ?>