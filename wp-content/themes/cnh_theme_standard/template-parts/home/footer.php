<?php
/**
 * Description: foots template parts for home template
 */
?>

<footer>
	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3>THÔNG TIN</h3>
					<p><?php the_field('thong_tin', 'option'); ?></p>
				</div>
				<div class="col-md-3 m-mt16">
					<h3>LIÊN HỆ</h3>
					<p>Email: <?php the_field('email', 'option'); ?></p>
					<p>Hotline: <?php the_field('hotline', 'option'); ?></p>
				</div>
				<div class="col-md-3 m-mt16">
					<h3>ĐỊA CHỈ</h3>
					<p><?php the_field('dia_chi', 'option'); ?></p>
				</div>
				<div class="col-md-3 m-mt16">
					<h3>FANPAGE</h3>
					<div class="fb-page" data-href="<?php the_field('fanpage', 'option'); ?>" data-small-header="false"
					     data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copy-right">
		<div class="container">
			<div><?php the_field('copyright', 'option'); ?></div>
		</div>
	</div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php bloginfo( 'template_directory' ) ?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ) ?>/assets/js/popper.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ) ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ) ?>/assets/js/slick.min.js"></script>
<script>
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
    $('.list-new').slick({
        infinite: true,
        slidesToShow: $(window).width() > 768 ? 3 : 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: $(window).width() > 768
    });

    var menu = $('header nav');
    var menuScrollTop = menu.offset().top;
    $(window).scroll(function () {
        if ($(window).scrollTop() > menuScrollTop) {
            menu.addClass('fixed-top');
        } else {
            menu.removeClass('fixed-top');
        }

    });


    $('a.hamburger').click(function (e) {
        e.preventDefault();
        $('header nav .menu').slideToggle();
    });

</script>


<?php wp_footer(); ?>

</body>
</html>
