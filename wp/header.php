<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php echo wp_get_document_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/img/favicon.png' ?>" type="image/x-icon">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="page-wrapper">
		
		<header class="header">
			<div class="container">

				<div class="header__logo">
					<a href="/" class="header__logo-wrapper">
						<div class="header__logo-img"><img src="<?php the_field('logo', 7); ?>" alt="Logo company"></div>
						<div class="header__logo-content">
							<div class="header__logo-title"><?php the_field('logo_title', 7); ?></div>
							<div class="header__logo-subtitle"><?php the_field('logo_subtitle', 7); ?></div>
						</div>
					</a>
				</div>

				<button class="header__close menu-btn"><span></span></button>

				<div class="header__menu">
					<nav class="header__nav">
						<?php 
							wp_nav_menu([
								'menu'            => 'header_menu',
								'menu_class'      => 'header__nav-list',
								'container'       => '',
							]);
						?>
					</nav>
					<a href="<?php the_field('header_btn_link', 7); ?>" class="header__btn btn btn_border"><?php the_field('header_btn_text', 7); ?></a>
				</div>

			</div>
		</header>

		<main class="main">