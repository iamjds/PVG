<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />	
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i|Oswald:300,400,500|Playfair+Display:400" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">


<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
<div id="site-title">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Pleasant View Logo.png" width="260" height="80" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"/></a>
</div>
<nav id="menu">
	<div id="social-menu">
		<ul>
			<li><a href="https://www.facebook.com/TheHomeofProvenWinners/" target="_blank"><i class="fab fa-youtube fa-sm"></i></a></li>
			<li><a href="https://www.facebook.com/TheHomeofProvenWinners/" target="_blank"><i class="fab fa-linkedin-in fa-sm"></i></a></li>
			<li><a href="https://www.facebook.com/TheHomeofProvenWinners/" target="_blank"><i class="fab fa-facebook-f fa-sm"></i></a></li>
			<li><a href="https://www.facebook.com/TheHomeofProvenWinners/" target="_blank"><i class="fab fa-instagram fa-sm"></i></a></li>
			<li><a href="https://www.facebook.com/TheHomeofProvenWinners/" target="_blank"><i class="fas fa-info fa-sm"></i></a></li>
		</ul>
	</div>
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	<form role="search" method="get" class="search-form flt-left" action="http://e1k.df5.myftpupload.com/">
		<label>
			<input type="search" class="search-field" placeholder="" value="" name="s" title="Search:">
		</label>
	<input type="submit" class="search-submit" value="Search">
	</form>
</nav>
</header>
	<div class="clear"></div>
	<div id="container">
		<div id="breadcrumb">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p id="breadcrumb-links">','</p>' );
			}
			?>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/breadcrumb-edge.png" width="18" height="30" class="bread-end" alt=""/>
		</div>
		<div class="clear"></div>