<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CNH_theme_standard
 */

?>


<div class="item" id="product-<?php the_ID(); ?>">
    <div class="img">
        <a href="<?php echo esc_url( get_permalink() ) ?>">
            <img src="<?php the_post_thumbnail_url( 'medium' ) ?>" alt="">
        </a>
    </div>
    <h3>
        <a href="<?php echo esc_url( get_permalink() ) ?>">
			<?php the_title() ?>
        </a>
    </h3>


    <div class="content">
		<?php echo wp_trim_words( get_the_content(), 30 ); ?>
    </div>
    <a class="button" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">Xem thêm</a>

</div><!-- #post-<?php the_ID(); ?> -->
