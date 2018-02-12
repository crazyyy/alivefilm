<?php /* Template Name: Home Page */ get_header(); ?>

  <div class="video-background">
    <iframe src="https://player.vimeo.com/video/241327664?autoplay=1&loop=1&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen background=1></iframe>
  </div>

  <div class="container">
    <div class="row">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>
          <?php the_content(); ?>
        </article>
      <?php endwhile; endif; ?>
    </div><!-- /.row -->
  </div><!-- /.container -->

<?php get_footer(); ?>
