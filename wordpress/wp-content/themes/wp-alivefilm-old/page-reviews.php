<?php /* Template Name: Reviews Page */ get_header(); ?>

  <div class="reviews-container">

    <?php $args = array(
      'post_type' => 'review',
      'posts_per_page' => 10,
      'order' => 'ASC',
      'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
      );
      query_posts($args);
    ?>

    <?php $i = 0; if (have_posts()): while (have_posts()) : the_post(); ?>

      <?php $class = 'looper looper-'.$i; ?>
      <?php if ($i == 1) { echo '<div class="reviews-container-delimetr">'; } ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>

        <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php if ( has_post_thumbnail()) { ?>
            <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php } else { ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php } ?>
        </a><!-- /post thumbnail -->

        <h2 class="inner-title">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          <span class="date"><?php the_field('place'); ?>, <?php the_field('date'); ?></span>
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
      <?php if ($i == 2) { echo '</div><!-- /.reviews-container -->'; } ?>

    <?php $i++; endwhile; endif; ?>

    <?php get_template_part('pagination'); ?>
    <?php wp_reset_query(); ?>

  </div><!-- /.row -->

<?php get_footer(); ?>
