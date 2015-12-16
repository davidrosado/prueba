<!doctype html>  

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>>

	<div id="content-wrapper">

		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<a title="<?php bloginfo('description'); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/360_Medicina_Estetica_Imagen.jpg" alt="360" title="360"></a>
					</div>

					<div class="col-sm-8 col-xs-12">
						<div id="texto-header">
							<?php wp_nav_menu( array('menu' => 'top header', 'menu_class' => 'nav')); ?>
							<?php dynamic_sidebar( 'texto-header' ); ?>
						</div>
					</div>
				</div>
			</div>

			<nav class="navbar">
				<div class="container">
		  
					<div class="navbar-header">
						<?php if (has_nav_menu("main_nav")): ?>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-responsive-collapse">
		    				<span class="sr-only"><?php _e('Navigation', 'simple-bootstrap'); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php endif ?>
					</div>

					<?php if (has_nav_menu("main_nav")): ?>
					<div id="navbar-responsive-collapse" class="collapse navbar-collapse">
						<?php
						    simple_bootstrap_display_main_menu();
						?>
						<?php get_search_form(); ?>
					</div>
					<?php endif ?>
				</div>
			</nav>
		</header>

		<div id="page-content">
			<div class="contenedor">