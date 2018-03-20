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

  <style>
    .fullscreen-bg{position:fixed;top:0;right:0;bottom:0;left:0;overflow:hidden;z-index:-100}.fullscreen-bg__video{position:absolute;top:50%;left:50%;width:auto;height:auto;min-width:100%;min-height:100%;-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}@media (max-width:767px){.fullscreen-bg{background:url('<?php echo get_template_directory_uri(); ?>/img/videoframe.jpg') center center / cover no-repeat}.fullscreen-bg__video{display:none}}
  </style>

</head>
<body>


  <div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
      <source src="<?php echo get_template_directory_uri(); ?>/video/big_buck_bunny.webm" type="video/webm">
      <source src="<?php echo get_template_directory_uri(); ?>/video/big_buck_bunny.mp4" type="video/mp4">
      <source src="<?php echo get_template_directory_uri(); ?>/video/big_buck_bunny.ogv" type="video/ogg">
    </video>
  </div>

  <?php wpeFootNav(); ?>

  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <?php wp_footer(); ?>

</body>
</html>
