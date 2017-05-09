<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/flexslider.css" />
<?php wp_head(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/jquery.flexslider-min.js"></script>

<script> 
// Can also be used with $(document).ready()
jQuery(window).load(function() {
	jQuery('#homelink').css('display','block');
	// If the scroll is more than the custom header, set the fixed class.
	menu_distance = jQuery('.navigation-top').offset().top - 50;
	jQuery(window).bind('scroll', function () {
	    if ( jQuery(window).scrollTop() >= menu_distance ) {
	        jQuery('#homelink').css('visibility','visible');
	    } else {
	        //jQuery('.navigation-top').css('padding-left','7em');
	        //jQuery('.navigation-top').animate({paddingLeft:0});
	        jQuery('#homelink').css('visibility','hidden');
	    }
	});
	// jQuery( "div.site-navigation-fixed" ).addClass( "headerlogodisplay" );
	jQuery('.flexslider').flexslider({
		animation: "slide",
		controlNav: true,
		directionNav: false,
		initDelay: 0,
		slideshowSpeed: 5000,
		start: function(){
        	jQuery('.flex-control-paging').removeClass('flex-control-paging');
    	}
	});
	jQuery('.topvideo').flexslider({
		animation: "slide",
		controlNav: true,
		directionNav: false,
		initDelay: 0,
		slideshowSpeed: 5000,
		start: function(){
        	jQuery('.flex-control-paging').removeClass('flex-control-paging');
    	}
	});
});
</script>
</head>

<body <?php body_class(); ?>>
	<div id="container">
<!-- begin page nav -->

<!-- end -->
<!-- begin header -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div id="homelink">
					<a href="/" title"TommieMedia">&nbsp;</a>
				</div>
				<div id="navigation-wrap" class="wrap">
						<a href="<?php bloginfo('url'); ?>" class="headerlogo">
						</a>
						<div id="top-search">
						<?php get_search_form($echo = true); ?>
						</div>
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					<div class="headericons">
						&nbsp;<a class="social" href="http://www.facebook.com/home.php?#!/tommiemedia?ref=ts" target="_blank">&#57384;</a>
						&nbsp;<a class="social" href="http://twitter.com/tommiemedia" target="_blank">&#57485;</a>
						&nbsp;<a class="social" href="http://www.instagram.com/tommiemedia" target="_blank">&#57412;</a>
						&nbsp;<a class="social" href="http://www.youtube.com/user/TommieMedia" target="_blank">&#57509;</a>
						&nbsp;<a class="social" href="http://www.pinterest.com/tommiemediapint" target="_blank">&#57443;</a>
						&nbsp;<a class="social" href="http://www.linkedin.com/company/tommiemedia" target="_blank">&#57420;</a>
					</div>
				</div><!-- .wrap-->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php
	// If a regular post or page, and not the front page, show the featured image.
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
		echo '<div class="single-featured-image-header">';
		the_post_thumbnail( 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
