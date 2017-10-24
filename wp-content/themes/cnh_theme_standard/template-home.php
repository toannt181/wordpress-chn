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
    <li class="item">
        <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/banner-1.jpg" alt="">
        <div>
            <h1>Thiết bị nghiệp vụ</h1>
            <h2>Trong lĩnh vực an ninh quốc phòng</h2>
            <a href="#">Xem thêm</a>
        </div>
    </li>
    <li class="item">
        <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/banner-1.jpg" alt="">
        <div>
            <h1>Thiết bị nghiệp vụ</h1>
            <h2>Trong lĩnh vực an ninh quốc phòng</h2>
            <a href="#">Xem thêm</a>
        </div>
    </li>

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
				) );

				foreach ( $terms as $term ) : ?>
					<?php if ( $term->slug === 'khac' ) {
						continue;
					} ?>

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
                <div class="item">
                    <div class="img"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/news-1.png" alt="">
                    </div>
                    <h3>Chiến tranh điện tử công nghệ cao tại Syria</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur dignissimos ea
                        laboriosam minima neque perferendis voluptate. Eius libero, veniam.</p>
                    <a class="button" href="#">Chi tiết</a>
                </div>
                <div class="item">
                    <div class="img"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/news-1.png" alt="">
                    </div>
                    <h3>Chiến tranh điện tử công nghệ cao tại Syria</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur dignissimos ea
                        laboriosam minima neque perferendis voluptate. Eius libero, veniam.</p>
                    <a class="button" href="#">Chi tiết</a>

                </div>
                <div class="item">
                    <div class="img"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/news-1.png" alt="">
                    </div>
                    <h3>Chiến tranh điện tử công nghệ cao tại Syria</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur dignissimos ea
                        laboriosam minima neque perferendis voluptate. Eius libero, veniam.</p>
                    <a class="button" href="#">Chi tiết</a>
                </div>
                <div class="item">
                    <div class="img"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/news-1.png" alt="">
                    </div>
                    <h3>Chiến tranh điện tử công nghệ cao tại Syria</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur dignissimos ea
                        laboriosam minima neque perferendis voluptate. Eius libero, veniam.</p>
                    <a class="button" href="#">Chi tiết</a>
                </div>
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
                <li class="item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate labore pariatur saepe
                        tempore
                        unde?
                        Aperiam eos excepturi natus officia voluptatum!</p>
                    <div class="name">
                        Nguyen Van A
                    </div>
                </li>
                <li class="item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate labore pariatur saepe
                        tempore
                        unde?
                        Aperiam eos excepturi natus officia voluptatum!</p>
                    <div class="name">
                        Nguyen Van A
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="bg-white">
        <div class="container ">
            <img class="agency" src="<?php bloginfo( 'template_directory' ) ?>/assets/img/agency.png" alt="">
        </div>
    </div>
</main>
<div id="map"></div>
<script>
    function initMap() {
        var uluru = {lat: 21.0364292, lng: 105.7896789};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
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

<?php get_template_part( 'template-parts/home/footer' ) ?>
