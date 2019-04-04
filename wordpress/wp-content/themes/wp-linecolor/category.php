<?php get_header(); ?>

  <div class="tygh-content clearfix">
    <div class="container ">

    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

      <div class="row">
        <div class="span13 ty-blog-grid">
          <div class="ty-mainbox-container clearfix">
            <div class="ty-mainbox-body">
              <div class="ty-wysiwyg-content">
                <div></div>
              </div>

              <div class="ty-blog">
                <div class="ty-pagination-container cm-pagination-container" id="pagination_contents">

                  <h1 class="cat-title inner-title"><?php the_category(', '); ?></h1>
                  <?php get_template_part('loop'); ?>
                  <?php get_template_part('pagination'); ?>

                </div>
              </div>

            </div>
          </div>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>
  </div>

<?php get_footer(); ?>
