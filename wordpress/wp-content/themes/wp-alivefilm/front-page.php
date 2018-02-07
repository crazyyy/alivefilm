<?php /* Template Name: Home Page */ get_header(); ?>

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
