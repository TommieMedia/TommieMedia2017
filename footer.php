<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

        </div><!-- #content -->

        <footer id="colophon" class="site-footer" role="contentinfo">
            <div id="footerwrap" class="wrap">
                <?php
                get_template_part( 'template-parts/footer/footer', 'widgets' );

                if ( has_nav_menu( 'social' ) ) : ?>
                    <nav class="social-navigation" role="navigation" aria-label="<?php _e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'social',
                                'menu_class'     => 'social-links-menu',
                                'depth'          => 1,
                                'link_before'    => '<span class="screen-reader-text">',
                                'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
                            ) );
                        ?>
                    </nav><!-- .social-navigation -->
                <?php endif;

                get_template_part( 'template-parts/footer/site');
                ?>
<div id="tmfooter">
<div class="flexcontainer">
<div class="child1">
<div class="footerlogo">
<a href="http://www.tommiemedia.com">&nbsp;</a>
</div>
  <h2>TOMMIEMEDIA NEWSROOM</h2>
     <ul>
    <li>#5055 2115 Summit Ave.</li>
    <li>University of St. Thomas</li>
    <li>St. Paul, MN 55105</li>
   <br>
<li>(651) 962-5260</li>
<li><a href="mailto:tommiemedia@stthomas.edu">tommiemedia@stthomas.edu</a></li>
</ul>
<br>
 <p>
    <a class="socialfooter" href="http://www.facebook.com/home.php?#!/tommiemedia?ref=ts" target="_blank">&#57384;</a>
    <a class="socialfooter" href="http://twitter.com/tommiemedia" target="_blank">&#57485;</a>
    <a class="socialfooter" href="http://www.instagram.com/tommiemedia" target="_blank">&#57412;</a>
    <a class="socialfooter" href="http://www.linkedin.com/company/tommiemedia" target="_blank">&#57420;</a>
    <br>
    <a class="socialfooter" href="http://www.pinterest.com/tommiemediapint" target="_blank">&#57443;</a>
    <a class="socialfooter" href="http://www.youtube.com/user/TommieMedia" target="_blank">&#57509;</a>
    <a class="socialfooter" href="http://www.tommiemedia.com/category/news/feed/" target="_blank">&#57457;</a>
    <a class="socialfooter" href="http://www.tommiemedia.com/email-updates/" target="_blank">&#57424;</a>
<p>

    </ul>
  </div> 
<div class="child">
<h2><a href="http://www.tommiemedia.com/category/news/">NEWS</a></h2>
    <ul>
    <li><a href="http://www.tommiemedia.com/category/news/news-in-90/">News in :90</a></li>
    <li><a href="http://www.tommiemedia.com/category/news/church-investigations/">Church Investigations</a></li>
    <li><a href="http://www.tommiemedia.com/category/news/tommie-award/">Tommie Award</a></li>
    <br>
    <h2><a href="http://www.tommiemedia.com/category/sports/">SPORTS</a></h2>
    <li><a href="http://www.tommiemedia.com/category/sports/sports-in-60/">Sports in :60</a></li>
    <li><a href="http://www.tommiemedia.com/category/sports/baseball-sports/">Baseball</a></li>
    <li><a href="http://www.tommiemedia.com/category/sports/softball-sports/">Softball</a></li>
    <li><a href="http://www.tommiemedia.com/category/sports/golf/">Golf</a></li>
    <li><a href="http://www.tommiemedia.com/category/sports/lacrosse/">Lacrosse</a></li>
    <li><a href="http://www.tommiemedia.com/category/sports/tennis/">Tennis</a></li>
    <li><a href="http://www.tommiemedia.com/category/sports/track-and-field-sports/">Track and Field</a></li>
    <br>
</div>
<div class="child">
<h2><a href="http://www.tommiemedia.com/category/multimedia/">MEDIA COMMONS</a></h2>
<ul>
     <li><a href="http://www.tommiemedia.com/category/multimedia/ap-video/">AP Video</a></li>
     <li><a href="http://www.tommiemedia.com/category/multimedia/audio/">Audio</a></li>
     <li><a href="http://www.tommiemedia.com/category/diversions/">Diversions</a></li>
     <li><a href="http://www.tommiemedia.com/category/multimedia/in-depth/">In Depth</a></li>
     <li><a href="http://www.tommiemedia.com/category/multimedia/infographics/">Infographics</a></li>
     <li><a href="http://www.tommiemedia.com/kust">KUST Radio</a></li>
     <li><a href="http://www.tommiemedia.com/category/multimedia/photos/">Photos</a></li>
     <li><a href="http://www.tommiemedia.com/category/multimedia/locker_room/">The Locker Room</a></li>
     <li><a href="http://www.tommiemedia.com/category/multimedia/tommie-chalk-talk"/>Tommie Chalk Talk</a></li>
     <li><a href="http://www.tommiemedia.com/category/multimedia/video/">Video</a></li>
    </ul>
</div>
  <div class="child">
  <h2><a href="http://www.tommiemedia.com/category/opinions/">OPINIONS</a></h2>
<ul>
    <li><a href="http://www.tommiemedia.com/category/opinions/letters/">Letters from Readers</a></li>
    <br>
    <h2><a href="http://www.tommiemedia.com/who-we-are/">ABOUT</a></h2>
    <li><a href="http://www.tommiemedia.com/contact-us/">Contact Us</a></li>
   <li><a href="http://www.tommiemedia.com/jobs/">Jobs</a></li>
   <li><a href="http://www.tommiemedia.com/terms-of-service/">Terms of Service</a></li>
   <li><a href="http://www.tommiemedia.com/email-updates/">Email Updates</a></li>
    </ul>
  </div>
  
</div>

<div id="copyright">Copyright &copy;<?php print date('Y'); ?> <a href="<?php bloginfo('url'); ?>">TommieMedia</a>. All rights reserved. | <a href="http://www.tommiemedia.com/wp-login.php">Login to TommieMedia.com</a></div>
<div class="clear"></div>



</div>
            </div><!-- .wrap -->
        </footer><!-- #colophon -->
    </div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>