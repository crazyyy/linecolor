<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <div class="ty-blog__item">
    <a href="<?php the_permalink(); ?>">
      <h2 class="ty-blog__post-title"><?php the_title(); ?></h2>
    </a>
    <div class="ty-blog__date"><?php the_time('j F Y'); ?> <span><?php the_time('G:i'); ?></div>
    <div class="ty-blog__author"><?php _e( 'Published by', 'wpeasy' ); ?> <?php the_author_posts_link(); ?></div>
    <div class="ty-blog__description">
      <div class="ty-wysiwyg-content">
        <div>
          <?php wpeExcerpt('wpeExcerpt40'); ?>
        </div>
      </div>
      <div class="ty-blog__read-more ty-mt-l">
        <a class="ty-btn ty-btn__secondary" href="<?php the_permalink(); ?>">Читать дальше</a>
      </div>
    </div>
  </div>

<?php endwhile; endif; ?>


<?php /* if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>

    <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if ( has_post_thumbnail()) { ?>
        <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php } else { ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php } ?>
    </a><!-- /post thumbnail -->

    <h2 class="inner-title">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h2><!-- /post title -->

    <span class="date"><?php the_time('j F Y'); ?> <span><?php the_time('G:i'); ?></span></span>
    <span class="author"><?php _e( 'Published by', 'wpeasy' ); ?> <?php the_author_posts_link(); ?></span>
    <span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'wpeasy' ), __( '1 Comment', 'wpeasy' ), __( '% Comments', 'wpeasy' )); ?></span><!-- /post details -->

    <?php wpeExcerpt('wpeExcerpt40'); ?>

  </div><!-- /looper -->
<?php endwhile; endif; */ ?>
