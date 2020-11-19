<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<!-- WordPressのjQueryパッケージの読み込みを止める -->
		<?php wp_deregister_script('jquery'); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
	<div class="wrap">

		<script type="text/javascript">
			jQuery(function ($) {

				$('#nav-toggle').on('click', function() {
					$('body').toggleClass('open');
				});

			});
		</script>


		<div id="nav-toggle">
			<div>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<header class="header-menu" id="gloval-nav">
				<div class="header-left">
					<a href="http://agehakyutech.s1009.xrea.com/"><img src="http://agehakyutech.s1009.xrea.com/wp-content/uploads/2020/03/ageha_logo.png" alt="Ageha"></a>
				</div>
				<div class="header-right">
					<ul>
						<li><a href="http://agehakyutech.s1009.xrea.com/about/">about</a></li>
						<li><a href="http://agehakyutech.s1009.xrea.com/blog/">blog</a></li>
						<li><a href="http://agehakyutech.s1009.xrea.com/contact/">contact</a></li>
					</ul>
					<a href="https://twitter.com/kyutech_Ageha" target="_blank" rel="noopener noreferrer"><img src="https://icongr.am/feather/twitter.svg?&color=708090" alt="twitter"></a>
					<a href="https://www.instagram.com/kyutech_ageha/" target="_blank" rel="noopener noreferrer"><img src="https://icongr.am/feather/instagram.svg?&color=708090" alt="instagram"></a>
					<a href="https://www.youtube.com/channel/UCpBh1bpYthhkCxSAU7CBVAA" target="_blank" rel="noopener noreferrer"><img src="https://icongr.am/feather/youtube.svg?&color=708090" alt="youtube"></a>
				</div>
		</header>

		<?php
		// Output the menu modal.
		// get_template_part( 'template-parts/modal-menu' );
