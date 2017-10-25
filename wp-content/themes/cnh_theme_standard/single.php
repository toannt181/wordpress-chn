<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CNH_theme_standard
 */
get_header();
?>
    <main id="article">
        <div class="row">
            <div class="col-md-8 left">


				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_type() );

				endwhile; // End of the loop.
				?>

                <div class="news-related">
                    <div class="header">
                        <span>Tin tức liên quan</span>
                    </div>
                    <div class="group-news">
                        <div class="row">
							<?php
							//Todo: for use in the loop, list 4 post titles related to first tag on current post

							$tags = wp_get_post_tags( $post->ID );

							if ( $tags ) {

								$first_tag = $tags[0]->term_id;
								$args      = array(
									'tag__in'          => array( $first_tag ),
									'post__not_in'     => array( $post->ID ),
									'posts_per_page'   => 6,
									'caller_get_posts' => 1
								);
								$my_query  = new WP_Query( $args );
								if ( $my_query->have_posts() ) {
									while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                                        <div class="col-md-4 item">
                                            <h3><a href="?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                            <p class="date">Ngày đăng <?php the_date( 'd/m/Y' ) ?></p>
                                            <p class="section">Trong <?php echo get_the_category()[0]->name ?></p>
                                        </div>

										<?php
									endwhile;
								}
								wp_reset_query();
							}
							?>
                        </div>
                    </div>
                </div>

                <div class="list-tag">
                    <span class="tag">TAGS</span>
					<?php the_tags( '<span class="item">',
						'</span><span class="item">',
						'</span>' ); ?>

                </div>
            </div>
			<?php get_sidebar(); ?>

        </div>
    </main>


<?php
get_footer();
