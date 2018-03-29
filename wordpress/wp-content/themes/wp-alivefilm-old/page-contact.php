<?php /* Template Name: Contacts Page */ get_header(); ?>

    <div class="container">
      <div class="row">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <article class="contact-content col-md-6">
            <?php the_content(); ?>
          </article>

          <article class="contact-form col-md-5 col-md-offset-1" role="complementary">
            <h4>напишите нам, мы очень ценим ваше мнение</h4>
            <?php echo do_shortcode('[contact-form-7 id="132" title="Контактная форма 1"]'); ?>
          </article><!-- /sidebar -->
        <?php endwhile; endif; ?>
      </div><!-- /.row -->
    </div><!-- /.container -->

<?php get_footer(); ?>
