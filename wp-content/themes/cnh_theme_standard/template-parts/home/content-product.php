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
        <img src="<?php the_post_thumbnail_url( 'medium' ) ?>" alt="">
    </div>
    <h3>
		<?php the_title() ?>
    </h3>

	<?php the_content(); ?>
    <a class="button" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">Xem thêm</a>

</div><!-- #post-<?php the_ID(); ?> -->
