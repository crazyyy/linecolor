<?php /* Template Name: Home Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <div class="tygh-content clearfix">
      <div class="container content-grid">

        <?php $images = get_field('slider'); if( $images ): ?>
          <div class="row">
            <div class="span16 ">
              <div class="row">
                <div class="span16 ">
                  <div class=" homepage-banners">
                    <div id="banner_slider_507" class="banners owl-carousel">

                      <?php foreach( $images as $image ): ?>
                        <div class="ty-banner__image-item">
                          <img class="ty-pict ty-banner__image cm-image" id="det_img_1013422454" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>">
                        </div>
                      <?php endforeach; ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

        <div class="row">
          <div class="span16 product-main-page">
            <div class="ty-wysiwyg-content" data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
              <div class="bg-grey-special g-pb-10">
                <div class="flex-block no-gutters justify-content-center">
                  <div class="col-12 g-pt-40 text-center">
                    <div class="u-heading-v1-4 g-bg-main g-brd-primary">
                      <h1 class="h3 u-heading-v1__title"><?php the_title(); ?></h1>
                    </div>
                  </div>
                  <div class="col-12 g-pb-30">
                  <?php the_content(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="span16 ">
            <div class="ty-mainbox-container clearfix h1-home-page text-center">
              <h1 class="ty-mainbox-title">КАТАЛОГ ПРОДУКЦИИ</h1>
              <div class="ty-mainbox-body">
                <div class="ty-subcategories">
                  <div class="ty-subcategories-block flex-block">

                    <div class="ty-column2 g-p-x-0 g-pb-50 col-md-4 col-sm-6 ty-subcategories-block__item">
                      <a href="https://xn--80apaibbplql4m.xn--p1ai/yemaly/" class="ty-subcategories-block__a"><img class="ty-pict  ty-subcategories-img cm-image" src="<?php echo get_template_directory_uri(); ?>/img/эмали-главная.jpg" alt="" title=""> Эмали</a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
