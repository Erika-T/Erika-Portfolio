<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title("|", true, "right"); bloginfo("name"); ?></title>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/logo_sml.png">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/foundation/reset.css" ?>" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/foundation/variables.css" ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/layout/posts.css" ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/layout/sidebar.css" ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/layout/header.css" ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/layout/footer.css" ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/layout/single.css" ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/object/component/button.css" ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/layout/responsive.css" ?>" type="text/css" media="(max-width:1024px)" />
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <header class="container">
    <!-- Logo Button -->
    <a href="index.html" class="logo-btn">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_sml.png" alt="Erika">
    </a>

    <!-- Hamburger Button-->
    <button type="button" id="js-btnHamburger" class="p-hamburger" aria-controls="global-nav" aria-expanded="false" tabindex="1">
      <span class="p-hamburger__line">
        <span class="u-visuallyHidden">Open the menu</span>
      </span>
    </button>

    <!-- Gnav -->
    <div class="p-drawer">
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
    </div>
    <h1 class="page-title">ブログ</h1>
  </header>