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
        <div class="container">
            <div class="row">
                <div class="col-md-8 left">

					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

                </div>
                <div class="col-md-4 right">
                    <div class="header">
                        <span>Tin tức nổi bật</span>
                    </div>
                    <div class="group-news">
                        <div class="item">
                            <h3><a href="">Lorem ipsum dolor sit amet.</a></h3>
                            <div class="d-flex justify-content-between">
                                <div><span class="author">hoang.pt</span><span class="date"> - 4 thang 7 2017</span>
                                </div>
                                <div class="comment-number">1</div>
                            </div>
                        </div>
                        <div class="item">
                            <h3><a href="">Lorem ipsum dolor sit amet.</a></h3>
                            <div class="d-flex justify-content-between">
                                <div><span class="author">hoang.pt</span><span class="date"> - 4 thang 7 2017</span>
                                </div>
                                <div class="comment-number">1</div>
                            </div>
                        </div>
                        <div class="item">
                            <h3><a href="">Lorem ipsum dolor sit amet.</a></h3>
                            <div class="d-flex justify-content-between">
                                <div><span class="author">hoang.pt</span><span class="date"> - 4 thang 7 2017</span>
                                </div>
                                <div class="comment-number">1</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>


<?php
get_footer();
