<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CNH_theme_standard
 */

?>
<?php get_template_part( 'template-parts/home/header' ); ?>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <div class="container">
		<?php if ( function_exists( 'bcn_display' ) ) {
			bcn_display();
		} ?>
    </div>
</div>


<div class="container">
