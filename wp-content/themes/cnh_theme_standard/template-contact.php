<?php
/**
 * Template name: Contact-template
 *
 * @package Base theme
 * @sub home
 * @author toan.nt181
 */
?>
<?php get_template_part( 'template-parts/home/header' ) ?>
<?php
//user posted variables
$name         = $_POST['message_name'];
$email        = $_POST['message_email'];
$phone_number = $_POST['message_phone'];
$message      = $_POST['message_text'];

if ( isset( $name ) ) {
//php mailer variables
	$to      = get_option( 'admin_email' );
	$subject = "" . $name;
	$headers = 'From: ' . $email . "\r\n" .
	           'Reply-To: ' . $email . "\r\n";

//Here put your Validation and send mail
	$sent = wp_mail( $to, $subject, strip_tags( "Tên: " . $name . "\nSố điện thoại: " . $phone_number . "\nEmail: " . $email . "\nNội dung: " . $message, $headers ) );

}


?>
<main>
    <div class="map-web">
        <div class="container">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
                </ol>
            </nav>
        </div>
    </div>

	<?php if ( isset( $name ) ) : unset( $name ); ?>
        <div class="container">
			<?php if ( $sent ) {
				echo '<h2>Tin nhắn đã được gửi!</h2>';
			}//message sent!
			else {
				echo '<h2>Tin nhắn gửi đi không thành công!</h2>';
			}//message wasn't sent
			?>
        </div>
	<?php endif; ?>

    <div class="map">
        <div class="container">
            <div id="map"></div>
        </div>
    </div>

    <div id="contact">
        <div class="container">
            <div class="row group">
                <div class="col-md-4 left">
                    <h2>Thông tin</h2>
                    <div class="item">
                        <div class="icon"><i class="fa fa-home" aria-hidden="true"></i></div>
                        <div><?php the_field( 'thong_tin', 'option' ); ?></div>
                    </div>
                    <div class="item">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div><?php the_field( 'hotline', 'option' ); ?></div>
                    </div>
                    <div class="item">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div><?php the_field( 'email', 'option' ); ?></div>
                    </div>
                    <div class="item">
                        <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <div><?php the_field( 'ten_lien_lac', 'option' ); ?></div>
                    </div>
                </div>
                <div class="col-md-8 right m-mt32">
                    <h2>Liên hệ</h2>
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-md-4">
                                <div><p>Tên*</p></div>
                                <div><input class="form-control" type="text" required name="message_name"></div>
                            </div>
                            <div class="col-md-4">
                                <div><p>Email*</p></div>
                                <div><input class="form-control" type="email" required name="message_email"></div>
                            </div>
                            <div class="col-md-4">
                                <div><p>Số điện thoại*</p></div>
                                <div><input class="form-control" type="text" required name="message_phone"></div>
                            </div>
                            <div class="col-md-12 mt16">
                                <div><p>Nội dung*</p></div>
                                <div><textarea class="form-control" type="text" rows="5" required
                                               name="message_text"></textarea></div>

                                <button class="button">Gửi liên hệ</button>

                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


</main>


<script>
    function initMap() {
        var uluru = {lat: 21.0503399, lng: 105.7773811};
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
