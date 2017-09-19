<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- begin main column -->

<div class="wrap" id="maincontent">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- 			<div id="top-search">
				<?php get_search_form($echo = true); ?>
			</div> -->
<div class="top-featured">
<div class="slideshow">
		<h1>Featured Stories</h1>
	<div class="flexslider">
		<ul class="slides">
<?php
	global $post;
	$args = array( 	
		'posts_per_page' 	=> 6, 
		'post_type' 		=> 'post', 
		'category' 			=> 4,
		'orderby' 			=> 'date',
		'order' 			=> 'DESC', 
		'post_status' 		=> 'publish', 
	); 
	$slides = get_posts( $args );
	if ( $slides ) {
		foreach( $slides as $p ) {
			$i = get_the_post_thumbnail_url( $p );
			$t = get_the_title($p);
			$l = get_post_permalink( $p->ID );
			$e = get_the_excerpt($p);
			if ( empty($i) ) {
				$m = get_attached_media( 'image', $p->ID );
				if (!empty($m)) {
					$k = key($m);
					$i = $m[$k]->guid;
				}
			}
			if ( !empty($i) ) {
?>
			<li>
				<a href="<?php echo $l; ?>"><img src="<?php echo $i; ?>" />
				<p class="flex-caption"><strong><?php echo $t; ?></strong><br /><?php echo strip_tags($e); ?></p></a>
			</li>
<?php
			}
		}
		wp_reset_postdata();
	}
?>
		</ul>
	</div>
</div>

<div class="featuredvideo">
	<h1>Featured Video</h1>
<?php query_posts('showposts=1&cat=61'); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php the_post_video(); ?>
<p><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>

</div><!--featuredvideo-->
</div><!--top-featured-->

<div class="clear"></div>

<?php endwhile; ?>
<?php else : ?>
<!-- this should never happen -->
<p>Currently no videos exist in the Featured Video category.</p>
<?php endif; ?>

<?php wp_reset_query(); ?>    

<div id="leaderboard">
<?php
	if ( function_exists(adrotate_group) ) {
		echo adrotate_group(5);
	}
?>
</div><!--leaderboard-->

<div id="main-column" class="tm-landing">
<div id="central-content">

<div class="container">
	<div class="top_child"><!--latest news-->
		<div class="category_title_left" style="float:none;">
			<?php query_posts('showposts=1&cat=62'); ?>
			<h2><?php single_cat_title(); ?> <a href="<?php print get_category_feed_link(62); ?>" class="rssbutton">&#57457;</a>
			</h2>
		</div>
		<?php query_posts('showposts=1&cat=62'); ?>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="headline">
			<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		</div>
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
			<!-- <div class="cropped_thumb"> -->
<?php 
	if (has_post_thumbnail()) {
		// the_post_thumbnail( array(640,640) ); 
		the_post_thumbnail('full'); 
	}
	else {
	    if ( get_the_author() == "Associated Press" ) {
        	echo('<img src="/wp-content/uploads/Associated_Press_logo_2012.svg_.png" width="150" height="150" />');
    	}
	}
?>
			<!-- </div> -->
		</a>
		<div class="time">
			<?php the_time('F j, Y g:i A'); ?>
		</div><!-- time -->
<?php the_excerpt(); ?>
	<?php endwhile; ?>
	<?php else : ?>
		<div class="postbox">
		<p>No entries were found in this category.</p>
		</div><!-- postbox -->
<?php endif; ?>
</div><!--latest news-->
<div class="top_child two-column"><!--latest sports-->
		<div class="category_title_right">
<?php query_posts('showposts=1&cat=63'); ?>
		<h2>
<?php single_cat_title(); ?> <a href="<?php print get_category_feed_link(63); ?>" class="rssbutton">&#57457;</a>
		</h2>
	</div>
<?php query_posts('showposts=1&cat=63'); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		<div class="headline">
			<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		</div>
	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php 
	if (has_post_thumbnail()) { 
		the_post_thumbnail('full'); 
	}
?></a>
<div class="time">
<?php the_time('F j, Y g:i A'); ?>
</div><!-- time -->

<?php the_excerpt(); ?>
<?php endwhile; ?>
<?php else : ?>
<div class="postbox">
<p>No entries were found in this category.</p>
</div><!-- postbox -->
<?php endif; ?>
</div><!--latest sports-->
<div class="top_child"><!--opinions-->
		<div class="category_title_left">
<?php query_posts('showposts=1&cat=15'); ?>
		<h2>
<?php single_cat_title(); ?> <a href="<?php print get_category_feed_link(15); ?>" class="rssbutton">&#57457;</a>
		</h2>
	</div>
<?php query_posts('showposts=1&cat=15'); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="headline">
<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
</div>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php if (has_post_thumbnail()) { the_post_thumbnail('full'); }?></a>
<div class="time">
<?php the_time('F j, Y g:i A'); ?>
</div><!-- time -->
<?php the_excerpt(); ?>
<?php endwhile; ?>
<?php else : ?>
<div class="postbox">
<p>No entries were found in this category.</p>
</div><!-- postbox -->
<?php endif; ?>
</div><!--opinions-->
<!-- </div> -->

<div class="top_child two-column"><!--more news-->
	<div class="category_title_left">
		<?php query_posts('showposts=1&cat=48'); ?>
		<h2><?php single_cat_title(); ?> <a href="<?php print get_category_feed_link(48); ?>" class="rssbutton">&#57457;</a>
		</h2>
	</div>
<?php query_posts('showposts=1&cat=48'); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="headline">
<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
</div>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php 
if (has_post_thumbnail()) { 
	the_post_thumbnail('full');
}
else {
    if ( get_the_author() == "Associated Press" ) {
    echo('<img src="/wp-content/uploads/Associated_Press_logo_2012.svg_.png" width="150" height="150" />');
    }
    else {
        echo('<img src="/wp-content/uploads/TMlogosquare.png" width="150" height="150" />');
    }
}
?></a>
<div class="time">
<?php the_time('F j, Y g:i A'); ?>
</div><!-- time -->
<?php the_excerpt(); ?>
<?php endwhile; ?>
<?php else : ?>
<div class="postbox">
<p>No entries were found in this category.</p>
</div><!-- postbox -->
<?php endif; ?>
</div><!--more news-->
<div class="top_child"><!--more sports-->
	<div class="category_title_right">
		<?php query_posts('showposts=1&cat=3516'); ?>
		<h2><?php single_cat_title(); ?> <a href="<?php print get_category_feed_link(3516); ?>" class="rssbutton">&#57457;</a>
		</h2>
	</div>
<?php query_posts('showposts=1&cat=3516'); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="headline">
<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
</div>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php 
	if (has_post_thumbnail()) { 
		the_post_thumbnail('full'); 
	}
?></a>
<div class="time">
<?php the_time('F j, Y g:i A'); ?>
</div><!-- time -->
<?php the_excerpt(); ?>
<?php endwhile; ?>
<?php else : ?>
<div class="postbox">
<p>No entries were found in this category.</p>
</div><!-- postbox -->
<?php endif; ?>
</div><!--more sports-->
<div class="top_child two-column"><!--diversions-->
		<div class="category_title_right">
<?php query_posts('showposts=1&cat=6'); ?>
		<h2>
<?php single_cat_title(); ?> <a href="<?php print get_category_feed_link(6); ?>" class="rssbutton">&#57457;</a>
		</h2>
	</div>
<?php query_posts('showposts=1&cat=6'); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="headline">
<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
</div>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php if (has_post_thumbnail()) { the_post_thumbnail('full'); }?></a>
<div class="time">
<?php the_time('F j, Y g:i A'); ?>
</div><!-- time -->
<?php the_excerpt(); ?>
<?php endwhile; ?>
<?php else : ?>
<div class="postbox">
<p>No entries were found in this category.</p>
</div><!-- postbox -->
<?php endif; ?>
</div><!--diversions-->
</div><!--middle flexcontainer-->

<div id="video">
<h2>TOP TOMMIEMEDIA VIDEOS</h2>
	<div class="topvideo">
<?php query_posts('showposts=2&cat=61'); ?>

<?php if (have_posts()) : 
	$count = 0;
	$category_link = get_category_link( 61 );
?>
<?php while (have_posts()) : the_post(); 
	if ($count > 0) {

?>
<?php the_post_video(); ?>
<p><a class="topvideo" href="<?php echo $category_link; ?>">More Top Videos</a></p>
<?php 
	}
	++$count;
	endwhile; 
?>
<?php else : ?>
<!-- this should never happen -->
<p>Currently no videos exist in the Featured Video category.</p>
<?php endif; ?>

<?php wp_reset_query(); ?>
	</div>
</div><!-- video -->
</div><!--central content-->
	<?php get_sidebar(); ?>
</div><!--main column-->
<div class="clear"></div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<div class="clear"></div>
<?php get_footer(); ?>