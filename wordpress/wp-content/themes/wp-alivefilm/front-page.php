<?php /* Template Name: Home Page */ ?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="//www.google-analytics.com/" rel="dns-prefetch">
  <link href="//cdnjs.cloudflare.com" rel="dns-prefetch">

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css" />

</head>
<body class="home">
<div class="wrapper">
  <header role="banner">
    <div class="container">
      <div class="row">

        <div class="header--logo col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
          <?php if ( !is_front_page() && !is_home() ){ ?>
            <a href="<?php echo home_url(); ?>">
          <?php } ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
          <?php if ( !is_front_page() && !is_home() ){ ?>
            </a>
          <?php } ?>
        </div><!-- /header--logo -->

        <div class="header-navlang col-md-4 col-sm-12 col-xs-12">
          <?php
            qtranxf_generateLanguageSelectCode(array(
              'type'   => 'custom',
              'format' => ''
            ))
          ?>
          <button class="header--nav" role="navigation"></button>
        </div><!-- /.header-navlang col-md-4 -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </header><!-- /header -->

  <section role="main">
    <?php wpeHeadNav(); ?>

    <div class="fullscreen-bg">
      <video loop muted autoplay poster="<?php echo get_template_directory_uri(); ?>/img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="<?php echo get_template_directory_uri(); ?>/video/big_buck_bunny.webm" type="video/webm">
        <source src="<?php echo get_template_directory_uri(); ?>/video/big_buck_bunny.mp4" type="video/mp4">
        <source src="<?php echo get_template_directory_uri(); ?>/video/big_buck_bunny.ogv" type="video/ogg">
      </video>
    </div>
  </section><!-- /section -->
</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="container">
    <div class="row">
      <p class="footer-copyright col-md-6">ALIVE FILM PRODUCTIONS &copy; 2017-<?php echo date("Y"); ?></p>
      <p class="footer-social col-md-6">FIND US <a href=""><i class="fab fa-instagram"></i></a><a href=""><i class="fab fa-facebook-square"></i></a><a href=""><i class="fab fa-vimeo-v"></i></a><a href=""><i class="fab fa-vk"></i></a></p>
    </div><!-- /.row -->
  </div><!-- /.container -->
</footer><!-- /footer -->

<?php wpeFootNav(); ?>

  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <?php wp_footer(); ?>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

</body>
</html>
