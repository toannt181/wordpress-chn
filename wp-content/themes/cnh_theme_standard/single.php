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
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_type() );

					endwhile; // End of the loop.
					?>

                    <div class="news-related">
                        <div class="header">
                            <span>Tin tức nổi bật</span>
                        </div>
                        <div class="group-news">
                            <div class="row">
                                <div class="col-md-4 item">
                                    <h3><a href="">Lorem ipsum dolor sit amet.</a></h3>
                                    <p class="date">4 thang 7 2017</p>
                                    <p class="section">Trong Danh gia</p>
                                </div>
                                <div class="col-md-4 item">
                                    <h3><a href="">Lorem ipsum dolor sit amet.</a></h3>
                                    <p class="date">4 thang 7 2017</p>
                                    <p class="section">Trong Danh gia</p>
                                </div>
                                <div class="col-md-4 item">
                                    <h3><a href="">Lorem ipsum dolor sit amet.</a></h3>
                                    <p class="date">4 thang 7 2017</p>
                                    <p class="section">Trong Danh gia</p>
                                </div>
                                <div class="col-md-4 item">
                                    <h3><a href="">Lorem ipsum dolor sit amet.</a></h3>
                                    <p class="date">4 thang 7 2017</p>
                                    <p class="section">Trong Danh gia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-tag">
                        <span class="tag">TAGS</span>
                        <span class="item">CPU</span>
                        <span class="item">CPU</span>
                    </div>
                </div>
                <div class="col-md-4 right">
                    <div class="header">
                        <span>Tin tức nổi bật</span>
                    </div>
                    <div class="group-news">

						<?php
						$mp = chn_get_poplular_post( 5 );
						foreach ( $mp as $p ) : ?>
                            <div class="item">
                                <h3><a href="<?php echo get_the_permalink($p->ID) ?>"><?php echo $p->post_title ?></a></h3>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <span class="author"><?php echo get_the_author($p->post_author) ?></span>
                                        <span class="date"> - <?php echo date( 'd-m-Y', strtotime( $p->post_date ) ) ?></span>
                                    </div>
                                    <div class="comment-number"><?php echo $p->comment_count ?></div>
                                </div>
                            </div>
							<?php
						endforeach;
						?>
                    </div>
                </div>
            </div>
        </div>


    </main>


<?php
get_footer();
