<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CNH_theme_standard
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-md-4 right">
    <div class="header">
        <span>Tin tức nổi bật</span>
    </div>
    <div class="group-news">

		<?php
		$mp = chn_get_poplular_post( 5 );
		foreach ( $mp as $p ) : ?>
            <div class="item">
                <h3><a href="<?php echo get_the_permalink( $p->ID ) ?>"><?php echo $p->post_title ?></a>
                </h3>
                <div class="d-flex justify-content-between">
                    <div>
                        <span class="author"><?php echo get_the_author( $p->post_author ) ?></span>
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