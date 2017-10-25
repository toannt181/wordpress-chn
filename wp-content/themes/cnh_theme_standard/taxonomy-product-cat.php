<?php
/**
 * Template name: Product-template
 *
 * @package Base theme
 * @sub home
 * @author toan.nt181
 */
?>
<?php get_header() ?>

<main>
    <div id="product">
        <div class="container">


            <h2>
                <div class="line"></div>
                <div><?php the_archive_title() ?></div>
                <div class="line"></div>
            </h2>

			<?php
			if ( have_posts() ) : ?>
                <div class="group-product row-3-item">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/home/content', 'product' );

					endwhile;
					?>

                </div>
                <div class="text-center my16">
					<?php if (get_previous_posts_link()) : ?>
                        <a href="<?php echo get_previous_posts_page_link() ?>"><img
                                    src="<?php bloginfo( 'template_directory' ) ?>/assets/img/previous.png" width="100"
                                    alt=""></a>
					<?php endif; ?>
					<?php if (get_next_posts_link()) : ?>
                        <a href="<?php echo get_next_posts_page_link() ?>"><img
                                    src="<?php bloginfo( 'template_directory' ) ?>/assets/img/next.png" width="100"
                                    alt=""></a>
					<?php endif; ?>
                </div>
				<?php
			endif; ?>

        </div>


</main>

<?php get_footer() ?>
