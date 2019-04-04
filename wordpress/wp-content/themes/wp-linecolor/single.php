<?php get_header(); ?>

  <div class="tygh-content clearfix">
    <div class="container ">

      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

      <div class="row">

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <div class="span13 ty-blog-grid">
            <div class="ty-mainbox-container clearfix">
              <h1 class="ty-mainbox-title">
                <span class="ty-blog__post-title"><?php the_title(); ?></span>
              </h1>
              <div class="ty-mainbox-body">
                <div class="ty-wysiwyg-content">
                  <div class="ty-blog__date"><?php the_time('d F Y'); ?> <?php the_time('H:i'); ?></div>
                  <div>
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; endif; ?>

        <?php get_sidebar(); ?>

      </div>

    </div>
  </div>

<?php get_footer(); ?>
