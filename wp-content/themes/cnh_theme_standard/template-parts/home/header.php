<?php
/**
 * Description: header template parts for home template
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/assets/css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/assets/css/main.css">

    <!-- Font icon -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/assets/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ) ?>/assets/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ) ?>/assets/css/slick-theme.css"/>

    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
	<?php wp_head(); ?>
</head>
<body>

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1737711359867939';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<header>
    <div class="top-title">
        <div class="container">
            <div class="row">
                <div class="col-md-7 d-flex align-items-center text-uppercase m-center">
                    <?php bloginfo('name') ?>
                </div>
                <div class="col-md-3 d-flex align-items-center m-mt16">
                    <input class="form-control" type="text" placeholder="Tìm kiếm">
                    <img src="" alt="">
                </div>
                <div class="col-md-2 d-flex align-items-center m-mt16 m-center">
                    <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/icon-flag.png" width="24" alt="">
                    <img class="ml8" src="<?php bloginfo( 'template_directory' ) ?>/assets/img/icon-flag-2.png"
                         width="24" alt="">
                </div>
            </div>
        </div>
    </div>

    <nav class="">
        <div class="container">
            <div class="logo">
                <a href="/"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/logo-white.png" alt=""></a>
            </div>
            <div><a class="hamburger" href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></div>
            <div class="menu">
                <div><a href="home">Trang chủ</a></div>
                <div class="dropdown">
                    <a href="#" class="button dropdown-toggle" data-toggle="dropdown">
                        Sản phẩm
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

						<?php

						//Todo: get terms list catagory
						$terms = get_terms( array(
							'taxonomy'   => 'product-cat',
							'hide_empty' => false,
						) );

						foreach ( $terms as $term ) : ?>
                            <a class="dropdown-item"
                               href="<?php echo get_term_link( $term->term_id ) ?>">
								<?php echo $term->name ?>
                            </a>
						<?php endforeach; ?>
                    </div>
                </div>
                <div><a class="button" href="/news">Tin tức</a></div>
                <div><a class="button" href="#">Thư viện ảnh</a></div>
                <div><a class="button" href="#">Tuyển dụng</a></div>
                <div><a class="button" href="/contact">Liên hệ</a></div>
            </div>
        </div>
    </nav>

</header>
<body>