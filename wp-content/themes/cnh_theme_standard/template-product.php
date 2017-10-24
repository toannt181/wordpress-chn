<?php
/**
 * Template name: Product-template
 *
 * @package Base theme
 * @sub home
 * @author toan.nt181
 */
?>
<?php get_template_part( 'template-parts/home/header' ) ?>

<main>
    <div class="map-web">
        <div class="container">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sản phẩm hỗ trợ</li>
                </ol>
            </nav>
        </div>
    </div>

    <div id="product">
        <div class="container">
            <h2>
                <div class="line"></div>
                <div>Nhóm sản phẩm</div>
                <div class="line"></div>
            </h2>

            <div class="group-product row-3-item">
                <div class="item">
                    <div class="img">
                        <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/product-1.png" alt="">
                    </div>
                    <h3>Công cụ hỗ trợ</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis deserunt fugit, ipsa
                        ipsam
                        magnam maxime neque nesciunt nisi qui repellat rerum sit, suscipit velit veritatis voluptas
                        voluptate? Quis, saepe?</p>
                    <a class="button" ref="#">Xem thêm</a>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/product-1.png" alt="">
                    </div>
                    <h3>Công cụ hỗ trợ</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis deserunt fugit, ipsa
                        ipsam
                        magnam maxime neque nesciunt nisi qui repellat rerum sit, suscipit velit veritatis voluptas
                        voluptate? Quis, saepe?</p>
                    <a class="button" href="#">Xem thêm</a>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/product-1.png" alt="">
                    </div>
                    <h3>Công cụ hỗ trợ</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis deserunt fugit, ipsa
                        ipsam
                        magnam maxime neque nesciunt nisi qui repellat rerum sit, suscipit velit veritatis voluptas
                        voluptate? Quis, saepe?</p>
                    <a class="button" href="#">Xem thêm</a>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/product-1.png" alt="">
                    </div>
                    <h3>Công cụ hỗ trợ</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis deserunt fugit, ipsa
                        ipsam
                        magnam maxime neque nesciunt nisi qui repellat rerum sit, suscipit velit veritatis voluptas
                        voluptate? Quis, saepe?</p>
                    <a class="button" href="#">Xem thêm</a>
                </div>
            </div>

            <div class="text-center my16">
                <a href="#"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/next.png" width="100" alt=""></a>
            </div>
        </div>
    </div>


</main>

<?php get_template_part( 'template-parts/home/footer' ) ?>
