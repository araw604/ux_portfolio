<?php
/**
 * The header for our theme.
 *
 * @package Portfolio_theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<div class="navParentcontainer">
		<a class="dispnone" href="<?php echo home_url();?>">
			<h2 class="name-logo">
				<ul>
					<li>Andee Pittman</li>
					<li>UX Designer</li>
				</ul>

			</h2>
		</a>

			<nav id="mobile-site-navigation" class="mobile-main-navigation" role="navigation">
						    <ul class="cf">
						        <li><a class="dropdown" href="#">Menu </a>
						            <ul>
						            	<li><a href="<?php echo home_url();?>">Home</a></li>
						                <li><a href="<?php echo home_url('/projects/');?>">Projects</a></li>
						                <li><a href="<?php echo home_url('/about/');?>">About</a></li>
						                <li><a href="<?php echo home_url('/Contact/');?>">Contact</a></li>
						            </ul>
						        </li>       
						    </ul>
			</nav>
		</div>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->
		<div class="desktopNavContainer">
				<a class="dispnone" href="<?php echo home_url();?>">
					<h2 class="name-logo">
						<ul>
							<li>Andee Pittman</li>
							<li>UX Designer</li>
						</ul>

					</h2>
				</a>

				<nav id="site-navigation" class="main-navigation" role="navigation">
				
					
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					
				</nav><!-- #site-navigation -->
		</div>
				<!-- asdadasdad -->

			</header><!-- #masthead -->

			<div id="content" class="site-content">
