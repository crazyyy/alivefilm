<?php /* Template Name: Reviews Page */ get_header(); ?>

  <div class="row row--nomargin">

      <?php $args = array(
        'post_type' => 'review',
        'posts_per_page' => 10,
        'order' => 'ASC',
        'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
        );
        query_posts($args);
      ?>

      <?php $i = 0; if (have_posts()): while (have_posts()) : the_post(); ?>

        <?php
          if (($i == 0) || ($i == 2) || ($i == 4) || ($i == 6) || ($i == 6) || ($i == 8) || ($i == 10) || ($i == 12)) {
            $class_1 = '';
            $class_2 = '';
          } else {
            $class_1 = 'col-md-push-6 feature-img--reverse';
            $class_2 = 'col-md-pull-6 inner-title--reverse';
          }
        ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class('looper row'); ?>>

          <a rel="nofollow" class="feature-img col-md-6 <?php echo $class_1; ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php if ( has_post_thumbnail()) { ?>
              <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } else { ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } ?>
          </a><!-- /post thumbnail -->

          <h2 class="inner-title col-md-6 <?php echo $class_2; ?>">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            <span class="date"><?php the_field('place'); ?>, <?php the_time('j F Y'); ?> </span>
            <div class="content-block">
              <?php the_content(); ?>
            </div><!-- /.content-block -->
            <blockquote>
              <?php the_field('big_quote'); ?>
            </blockquote>
            <div class="quote-block">
              <?php the_field('second_content'); ?>
            </div><!-- /.quote-block -->
          </h2><!-- /post title -->

        </div><!-- /looper -->
      <?php $i++; endwhile; endif; ?>

    <?php get_template_part('pagination'); ?>
    <?php wp_reset_query(); ?>

  </div><!-- /.row -->

<?php get_footer(); ?>
