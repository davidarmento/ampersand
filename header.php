<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?></title>

	<!-- Definir viewport para dispositivos web móviles -->
	<meta name="viewport" content="width=device-width, minimum-scale=1">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

	<?php
	//Color principal
	$color = '#3e9ddd';

	//Color Enlaces
	$colorLinks = '#2489CC';
	?>
	<meta name="theme-color" content="<?=$color?>" />
	<style>
		body { margin:0; font-family: 'Open Sans', sans-serif; font-weight: 300; font-size: 14px; color: #444; background:#fff; overflow-x: hidden; }
		header { clear: both; padding:38px 0; }
		header .site-title { padding: 0; margin: 0; margin-bottom:10px; }
		header .site-title a { color:#444; text-decoration: none; font-size: 54px; }
		header p { font-size: 17px; padding: 0; margin: 0; }
		.nav { clear: both; background:<?php echo $color ?>; }
		.nav ul { padding: 0; margin: 0; list-style: none;}
		nav a { display: block; float: left; padding:22px 14px; font-size:18px; text-decoration: none; color:#fff;
				text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.15);
		    font-weight: 400;
		    line-height: 2.2em
		}
		nav a:hover { background-color:#7BBCE8; color:#fff; }
		footer { clear: both; margin-top: 80px; background-color:#333; padding:40px 100px; }
		footer p { color:#ccc; font-size:16px; }
		footer p a { color:#ccc; }
		footer p a:hover { color:#fff; }
		aside { padding-left: 40px; }
		.footer-right { text-align: right; }
		.body { margin-top:60px; }

		.mobile-header { display: none; position: fixed; width: 100%; top: 0; left: 0; z-index: 10000; text-align: center; background:<?php echo $color ?>; padding:10px 0; }
		.mobile-title a { color:#fff; font-size:26px; }
		.pc-header { display: block; }
		.mobile-menu { display:block; margin-left: 28px; margin-top: -30px; cursor: pointer; z-index:999999;}
		.bar1, .bar2, .bar3 { width: 28px; height: 4px; background-color: #fff; border-radius:4px; margin: 5px 0; transition: 0.4s; }
		.change .bar1 { -webkit-transform: rotate(-45deg) translate(-7px, 6px); transform: rotate(-45deg) translate(-7px, 6px); }
		.change .bar2 { opacity: 0; }
		.change .bar3 { -webkit-transform: rotate(45deg) translate(-7px, -6px); transform: rotate(45deg) translate(-7px, -6px); }

		.comentarios { border-top: 1px solid #ccc; padding-top: 40px; margin-top: 40px; }
		.commentlist { list-style: none; padding: 0}
		.commentlist ul { list-style: none; }
		.comment { margin-top: 60px; }
		.children { margin-top: 60px; padding-left: 40px; }
		.commentmetadata { font-size: 14px; margin-top:10px; }

		h1 { padding: 0; margin: 0; color:#444; font-size:32px; margin-bottom:40px; }
		h2 { padding: 0; margin: 0; color:#444; font-size:26px; margin-bottom:40px; }
		h3 { padding: 0; margin: 0; color:#444; font-size:20px; margin-bottom:40px; }
		p { font-size:19px; margin-bottom:30px; color:#555; line-height: 28px; }
		a { color:<?php echo $colorLinks ?>; text-decoration: none; font-size: 19px; }
		a:hover { color:#FF9326; }
		hr { border: 0; height: 1px; background: #ccc; margin:40px 0 40px 0; }
		blockquote { background-color:#E1F0FF; border-bottom:3px solid #B0D8FF; margin:0; padding:10px 30px; margin-bottom:60px; border-radius:4px;  }
		blockquote:hover { background-color:#FFECD9; border-bottom:3px solid #FFD2A6; }
		ul { margin:0 0 0 20px; padding: 0; margin-bottom:60px; }
		li { margin-bottom:12px; font-size:19px; }
		figure { padding: 0; margin: 0; }
		input[type="text"], textarea { display:block; font-family: 'Open Sans', sans-serif; clear:both; border:1px solid #ccc; outline:none; border-radius:3px; padding:1.5%; width: 47%;	}
		textarea { width: 97%; }
		input[type="submit"] { cursor:pointer; background:<?php echo $color ?>; border:1px solid <?php echo $color ?>; padding:14px 22px; border-radius:3px; font-size:15px; margin-bottom:28px; color:#fff; }

		/* Widgets */
		.header-widget-area { text-align: right; }
		.footer-widget-area { text-align: right; }
		#sidebar hr:last-child { display: none; }

		/* Sidebar */
		#sidebar hr:last-child { display: none; }
		#sidebar h3 { margin-bottom:20px; }
		#sidebar ul { list-style-image: url('<?php echo get_site_url() ?>/wp-content/themes/ampersand/images/arrow.png'); margin: 0 0 0 16px; padding: 0; }
		#sidebar li { margin-bottom:8px; font-size:16px; }

		/* Mini-Boostrap */
		.row { margin-right: -15px; margin-left: -15px; }
		.col-lg-12, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-12 {position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; box-sizing: border-box; }
		.clear { clear:both; }
		.text-center { text-align: center; }
		.container { margin: 0 auto; max-width: 1200px; min-width: 280px; }
		table { width: 100%; padding:10px; color:#555; }

		.col-lg-10,.col-md-10 { width: 83.33333333%; float:left; }
		.col-lg-9,.col-md-9 { width: 75%; float:left; }
		.col-lg-8,.col-md-8 { width: 66.66666667%; float:left; }
		.col-lg-7,.col-md-7 { width: 58.33333333%; float:left; }
		.col-lg-6,.col-md-6 { width: 50%; float:left; }
		.col-lg-5,.col-md-5 { width: 41.66666666%; float:left; }
		.col-lg-4,.col-md-4 { width: 33.33333333%; float:left; }
		.col-lg-3,.col-md-3 { width: 25%; float:left; }
		.col-lg-2,.col-md-2 { width: 16.66666666%; float:left; }
		.col-lg-1,.col-md-1 { width: 8.33333333%; float:left; }

		.fancy-list { list-style: none; background-color:#E1F0FF; overflow:auto; border-bottom:3px solid #B0D8FF; margin:0; padding:40px; margin-bottom:60px; border-radius:4px; }
		.fancy-list li { width: 33.33333%; float: left; }
		.fancy-list li a { font-size: 17px; font-weight: bold; }

		/* Linea heredada de plugin ad-manager | cargada aquí para liberar carga */
		.no-mobile-plugin { display:block !important; }

		@media (min-width: 1025px) and (max-width: 1260px) {
			.container { padding:0 24px; }
		}
		@media (max-width: 1024px) {
			.no-mobile-plugin { display:none !important; }
			.container { padding:0 26px; }
			.header-widget-area { display: none; }
			.footer-widget-area { text-align: center; }
			.img-responsive { width:100%; height: auto; }
			.col-lg-10,.col-lg-9,.col-md-8,.col-md-7,.col-md-6,.col-md-5,.col-md-4,.col-md-3,.col-md-2 { width: 100%; float:left; }
			.mobile-header { display: block; }
			.pc-header { display: none; }
			.nav { position: fixed; height: 100%; border-right:1px solid #ccc; z-index: 99999; background-color:#f0f0f0; margin: 0; padding: 0; margin-top: 14px; width:280px; margin-left:-290px; transition: 0.5s; }
			.nav .row, .nav .container, .nav ul, .nav li { margin: 0; padding: 0; }
			.nav a { width:90%; margin: 0; padding:10px 5%; font-size:14px; color: #666; border-bottom:1px solid #ccc; }
			.nav a:hover { background: #fff; color: #333; }
			.fancy-list li { width: 50%; float: left; }
			header { padding:0; }
			body { padding-top:40px; }
			h1 { font-size:26px; }
			h2 { font-size:22px; margin-bottom:40px; }
			h3 { font-size:18px; }
			aside { padding-left: 0; }
			footer { text-align: center; padding:40px 0; }
			input[type="text"] { width: 97%; }
		}
		@media (max-width: 768px) {
			.col-lg-10,.col-lg-9,.col-md-8,.col-md-7,.col-md-6,.col-md-5,.col-md-4,.col-md-3,.col-md-2 { width: 100%; float:left; }
			.mobile-header { display: block; }
			.fancy-list li { width: 100%; float: left; }
			.nav { margin-top: 12px; }
			p { font-size:16px; margin-bottom:30px; color:#555; line-height: 26px; }
		}
	</style>
</head>
<body itemtype="http://schema.org/Blog" itemscope="itemscope">
	<header itemtype="http://schema.org/WPHeader" itemscope="itemscope">
		<div class="container">
			<div class="mobile-header">
				<div class="row">
					<p class="mobile-title"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></p>
					<div class="mobile-menu" onclick="openMn(this)">
						  <div class="bar1"></div>
						  <div class="bar2"></div>
						  <div class="bar3"></div>
					</div>
				</div>
			</div>
			<div class="pc-header">
				<div class="row">
					<div class="col-md-6">
						<p class="site-title"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></p>
						<p itemprop="description"><?php bloginfo('description'); ?></p>
					</div>
					<div class="col-md-6">
						<?php if ( is_active_sidebar( 'header-widget-area' ) ) : ?>
						<?php dynamic_sidebar( 'header-widget-area' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</header>
	<div class="nav" id="nav" itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope">
		<div class="container">
			<div class="row">
				<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
			</div>
		</div>
		<div class="clear"></div>
	</div>
