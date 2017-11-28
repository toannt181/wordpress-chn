<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CNH_theme_standard
 */

?>

<?php

if ( is_singular() ) :
	the_title( '<h2 class="entry-title">', '</h2>' );
else :
	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
endif; ?>

<article id="post-<?php the_ID(); ?>">
	<?php if ( has_post_thumbnail() ) : ?>
        <div class="img">
			<?php the_post_thumbnail( 'medium' ) ?>
        </div>
	<?php endif; ?>
    <div class="content">
		<?php the_content() ?>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
