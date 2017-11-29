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
	// Single post
	if ( is_singular() ) :
		the_title( '<h2 class="entry-title">', '</h2>' );

		if ( has_post_thumbnail() ) : ?>
            <div class="img">
				<?php if ( ! is_singular() ) : ?>
                    <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
						<?php the_post_thumbnail( 'medium' ) ?>
                    </a>
				<?php else : ?>
					<?php the_post_thumbnail( 'medium' ) ?>
				<?php endif; ?>
            </div>
			<?php
		endif; ?>

		<?php if ( 'post' === get_post_type() ) : ?>
        <p class="time"><?php cnh_theme_standard_posted_on_lio(); ?></p>
	<?php endif; ?>

        <div class="content">
			<?php the_content() ?>
        </div>


	<?php else : ?>
        <div class="new-box">
            <div class="img">
				<?php if ( ! is_singular() ) : ?>
                    <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
						<?php the_post_thumbnail( 'medium' ) ?>
                    </a>
				<?php else : ?>
					<?php the_post_thumbnail( 'medium' ) ?>
				<?php endif; ?>
            </div>

            <div class="combo-box">
				<?php the_title(
					'<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">',
					'</a></h2>' );
				?>
				<?php if ( 'post' === get_post_type() ) : ?>
                    <p class="time"><?php cnh_theme_standard_posted_on_lio(); ?></p>
				<?php endif; ?>
                <p><?php echo wp_trim_words( get_the_content(), 25 ) ?></p>

            </div>
        </div>
	<?php endif; ?>


</article><!-- #post-<?php the_ID(); ?> -->
