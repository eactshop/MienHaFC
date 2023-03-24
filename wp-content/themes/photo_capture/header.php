<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package photo_capture
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="header-area navbar v4" id="header">
		<!--:::::define scroll to up btn  :::::::-->
		<a href="#home" class="up_btn scroll"><i class="fas fa-angle-up"></i></a>
		<div class="container">
			<div class="col-6 col-lg-2 align-self-center">
				<div class="logo white">
					<a href="#">TTA</a>
				</div>
			</div>
			<div class="col-lg-7 col-6 align-self-center text-right">
				<div class="stellarnav">
					<ul>
						<li><a href="#home">Trang chủ</a>
						</li>
						<li><a href="#features">Thông tin</a></li>
						<li><a href="#myClub">Số dư</a></li>
						<li><a href="#myClub">Thành viên</a></li>
					</ul>
				</div><!-- .stellarnav -->
			</div>
			<div class=" col-lg-3 d-none d-lg-block align-self-center text-right">
				<a href="#bank" class="custom_btn">Nộp Quỹ</a>
			</div>
		</div>
	</div>