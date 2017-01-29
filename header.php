<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?></title>

	<!-- Definir viewport para dispositivos web móviles -->
	<meta name="viewport" content="width=device-width, minimum-scale=1">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

	<style>
		body { margin:0; font-family:Arial; font-weight: 300; font-size: 14px; color: #444; background:#fff; overflow-x: hidden; }
		header { clear: both; }
		.nav { clear: both; background:#3e9ddd; }
		.nav ul { padding: 0; margin: 0; list-style: none;}
		nav a { display: block; float: left; padding:18px 14px; font-size:17px; text-decoration: none; color:#fff;
			text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.15);
		    font-weight: 600;
		    line-height: 2.2em;
		    font-family: Helvetica, Arial, sans-serif;
		}
		nav a:hover { background-color:#333 }
		footer { clear: both; margin-top: 40px;}

		/* Mini-Boostrap*/
		.row { margin-right: -15px; margin-left: -15px; }
		.col-lg-12, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-12 {position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; box-sizing: border-box; }
		.clear { clear:both; }
		.text-center { text-align: center; }
		.container { margin: 0 auto; width: 1200px; }
		table { width: 100%; padding:10px; color:#555; }
		.col-lg-8,.col-md-8 { width: 66.66666667%; float:left; }
		.col-lg-7,.col-md-7 { width: 58.33333333%; float:left; }
		.col-lg-6,.col-md-6 { width: 50%; float:left; }
		.col-lg-5,.col-md-5 { width: 41.66666666%; float:left; }
		.col-lg-4,.col-md-4 { width: 33.33333333%; float:left; }
		.col-lg-3,.col-md-3 { width: 25%; float:left; }

		@media (max-width: 768px) {
			.container-post { width: 90%; }
			.text-right {text-align: center; }
			.pad ul.categories li a { float: left; margin-top: 20px; margin-left:0; margin-right: 10px; }
			footer { text-align: center; }
			footer .col-md-6 { margin-top: 40px; }
			footer img { width: 32px; height: 32px; }
			.menu-opener { width: 62px !important; }
			.menu-opener span { display:none; }
			header .btn { display: none; }
			.slider { height: 340px; }
			.slider .categories { display: none; }
			.slider h1 { padding:80px 0 0 0; font-size:38px; }
			.col-lg-8,.col-md-7,.col-md-6,.col-md-5,.col-lg-4,.col-md-4,.col-md-3 { width: 100%; float:left; } .img-responsive { width:100%; height: auto; } .sr-only { display: none; }
		}
		@media (min-width: 769px) and (max-width: 991px) { .container-post { width: 90%; } header .btn { display: none; } .col-lg-4,.col-md-4 { width: 50%; } .col-lg-3,.col-md-3 { width: 50%; } .col-lg-8,.col-md-7,.col-md-5 { width: 100%; float:left; } .col-md-6 { width: 50%; float:left; } .img-responsive { width:100%; height: auto; } }
		@media (min-width: 769px) and (max-width: 1400px) { .pad ul.categories { float: left; clear: both; } .pad ul.categories li a { float: left; margin-top: 20px; margin-left:0; margin-right: 10px; } }
		@media (min-width: 992px) and (max-width: 1770px) { .col-lg-4,.col-md-4 { width: 50%; } .col-lg-3,.col-md-3 { width: 50%; } }
	</style>

</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
				</div>
				<div class="col-md-6">
					asd
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</header>
	<div class="nav">
		<div class="container">
			<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
		</div>
		<div class="clear"></div>
	</div>
