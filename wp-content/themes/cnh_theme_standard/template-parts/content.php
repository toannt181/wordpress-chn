<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CNH_theme_standard
 */

?>

<article id="post-<?php the_ID(); ?>">

    <!--    <p class="time">Ngay 15/15/1515 - nguoi dang admin</p>-->

	<?php
	if ( is_singular() ) :
		the_title( '<h2 class="entry-title">', '</h2>' );
	else :
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif;


	if ( has_post_thumbnail() ) : ?>
        <div class="img">
            <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"><?php the_post_thumbnail( 'medium' ) ?></a>
        </div>
		<?php
	endif;

	if ( 'post' === get_post_type() ) : ?>
        <p class="time"><?php cnh_theme_standard_posted_on_lio(); ?></p>

		<?php
	endif; ?>

    <div class="content">
		<?php the_content() ?>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
