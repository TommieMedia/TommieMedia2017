<div id="featured">
<div id="featuredleft">
<div id="top_posts">
<h2>FEATURED STORIES</h2>
<div class="clear"></div>
 <div style="margin:6px 0 4px 0;float:left;width:445px;height:290px;z-index:-1;">
               <?php dynamic_sidebar('fourth_widget_area'); ?>
</div>
</div>
                

</div><!-- featuredleft -->

<div id="featuredcenter">
 
<?php $i = 0; ?>
<?php foreach ($featured_categories as $feature) { ?>
<?php $i++; ?>
<?php query_posts('showposts=1&cat='.$feature); ?>
<div id="top_posts">
<h2 style="margin-left: 10px;">FEATURED VIDEO</h2>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
 
<!--
<div class="time" style="font-color:#999;margin:6px 0;"><?php the_time('l, F j, Y g:i A'); ?></div>
 -->

<div style="margin:6px 0 4px 15px;float:left;">
<?php the_post_video(480,290); ?>
<h3 style="font-size:1em;width:100%;padding: 0.25em 0;text-align: center;" class="clear"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

</div>

</div>
<div class="clear"></div>
<?php endwhile; ?>
<?php else : ?>

<?php endif; ?>
<?php } ?>
<?php wp_reset_query(); ?>                
                
                
</div><!-- featuredcenter -->


<div class="clear"></div>


</div><!-- featured-->














