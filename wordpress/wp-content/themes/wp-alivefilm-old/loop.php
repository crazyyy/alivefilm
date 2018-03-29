  <div class="container--loop" id="posts_list">
    <?php $i = 0; if (have_posts()): while (have_posts()) : the_post(); ?>

    <?php if ($i == 1) { echo '<div class="looper-container-delimetr">'; } ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class('looper looper--articles row looper--articles-'.$i); ?>>

        <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php if ( has_post_thumbnail()) { ?>
            <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php } else { ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php } ?>
        </a><!-- /post thumbnail -->

        <h2 class="inner-title">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          <span class="date"><?php the_field('date'); ?> </span>
        </h2><!-- /post title -->

      </div><!-- /looper -->

    <?php if ($i == 2) { echo '</div><!-- /.looper-container-delimetr-->'; } ?>

    <?php $i++; endwhile; endif; ?>
  </div>
