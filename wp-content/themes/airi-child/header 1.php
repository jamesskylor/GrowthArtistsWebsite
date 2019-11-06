<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Airi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification=ffLYKFTEQ6gf_zPr4l0SN1NzdeuazEww7D_D7nL-Qbc" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet">
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/core.js"></script>
	
   <script>
  var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
    loop: true
});

typewriter.typeString('innovation')
    .pauseFor(2500)
    .deleteAll()
    .deleteChars(7)
    .start();
	</script>   
   
   
   <?php wp_head(); ?>
<script>

	jQuery(document).ready(function(){

		jQuery(".site-header").css("cssText", "position:absolute!important;");

		/*jQuery(document).scroll(function(){ 

		
		var scroll = $(window).scrollTop();
		 if(scroll==0){  
				jQuery('#masthead').removeClass('test_math');  
		 } else{
			jQuery('#masthead').addClass('test_math');
		 }
		});*/

	});

</script>

Here is the code in text format:

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139966786-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139966786-1');
</script>

</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'airi' ); ?></a>

	<?php $menu_layout = airi_menu_layout(); ?>
	<?php get_template_part( 'template-parts/menus/menu', $menu_layout['type'] ); ?>

	<div id="content" class="site-content">

	<?php
		if ( !is_page_template( 'page-templates/template_page-builder.php') ) {
			echo '<div class="container">';
			echo 	'<div class="row">';
		}
	?>