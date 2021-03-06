<?php
/**
 * Template name: Home-template
 *
 * @package Base theme
 * @author toan.nt181
 */
?>

<?php get_template_part( 'template-parts/home/header' ) ?>


<ul class="banner">
	<?php if ( have_rows( 'top_banner' ) ):

		while ( have_rows( 'top_banner' ) ) : the_row(); ?>

            <li class="item">
				<?php $image = get_sub_field( 'banner_image' ); ?>
                <a href="<?php the_sub_field( 'link' ) ?>">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                </a>
				<?php if ( get_sub_field( 'is_have_button' ) ): ?>
                    <a class="button" href="<?php the_sub_field( 'link' ) ?>">Xem thêm</a>
				<?php endif; ?>
            </li>
		<?php endwhile;

	endif; ?>


</ul>

<main>

    <div id="product">
        <div class="container">
            <h2>Sản phẩm</h2>
            <div class="group-product">

				<?php

				//Todo: get terms list catagory
				$terms = get_terms( array(
					'taxonomy'   => 'product-cat',
					'hide_empty' => false,
					'orderby'    => 'count',
					'order'      => 'DES',
				) );

				foreach ( $terms as $term ) : ?>
                    <div class="item">
                        <div class="img">
							<?php echo get_the_category_thumbnail( $term->term_id ) ?>
                        </div>
                        <h3><?php echo $term->name ?></h3>
                        <p><?php echo $term->description ?></p>
                        <a class="button" href="<?php echo get_term_link( $term->term_id ) ?>">Xem thêm</a>
                    </div>
				<?php endforeach; ?>

            </div>
        </div>
    </div>

    <div id="news">
        <div class="container">
            <h2>
                <div class="line"></div>
                <div>Tin tức nổi bật</div>
                <div class="line"></div>
            </h2>
            <div class="group-item list-new">
				<?php
				$mp = chn_get_poplular_post_unlimited_day_before( 5 );
				foreach ( $mp as $p ) : ?>
                    <div class="item">
                        <div class="img">
							<?php echo get_the_post_thumbnail( $p->ID, 'medium' ) ?>
                        </div>
                        <h3><?php echo wp_trim_words( $p->post_title, 15 ) ?></h3>
                        <p class="content">
							<?php echo wp_trim_words( $p->post_content, 20 ) ?>
                        </p>
                        <a class="button" href="<?php echo get_the_permalink( $p->ID ) ?>">Chi tiết</a>
                    </div>

					<?php
				endforeach;
				?>

            </div>
        </div>
    </div>

    <div id="comment">
        <div class="container">
            <h2>
                <div class="line"></div>
                <div>Nhận xét của khách hàng</div>
                <div class="line"></div>
            </h2>
            <div class="text-center quote"><img
                        src="<?php bloginfo( 'template_directory' ) ?>/assets/img/blockquote-1.png" alt=""></div>

            <ul class="m-0 p-0 list-comment">
				<?php
				if ( have_rows( 'nhan_xet_khach_hang' ) ):

					// loop through the rows of data
					while ( have_rows( 'nhan_xet_khach_hang' ) ) : the_row();

						?>
                        <li class="item">
                            <p><?php the_sub_field( 'nhan_xet' ); ?></p>
                            <div class="name"><?php the_sub_field( 'ten_khach_hang' ); ?></div>

                        </li>
						<?
					endwhile;
				endif;

				?>

            </ul>
        </div>
    </div>

    <div class="bg-white">
        <div class="container ">
            <div id="list-logo">
				<?php
				$images = get_field( 'logo_khach_hang' );

				if ( $images ): ?>
					<?php foreach ( $images as $image ): ?>
                        <div class="logo"><img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>"/></div>
					<?php endforeach; ?>
				<?php endif; ?>
            </div>
        </div>
    </div>
</main>
<div id="map"></div>
<script>
    function initMap() {
        var uluru = {
            lat: <?php the_field( 'latitude', 'option' ); ?>,
            lng: <?php the_field( 'longitude', 'option' ); ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: <?php the_field( 'zoom', 'option' ); ?>,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC41cdbDqeO8c9KcIc0FC-dt8kuA4yJuwE&callback=initMap">
</script>
<script>
    document.addEventListener("DOMContentLoaded", function (event) {

        $('ul.banner').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
        });
        $('ul.list-comment').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false
        });

        var numberListNew = $('.list-new').children().length < 3 ? $('.list-new').children().length : 3;
        $('.list-new').slick({
            infinite: true,
            slidesToShow: $(window).width() > 768 ? numberListNew : 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: $(window).width() > 768
        });

    });
</script>
<?php get_template_part( 'template-parts/home/footer' ) ?>
