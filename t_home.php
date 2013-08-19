 <?php   /* Template Name: Home Template */ ?>


<?php get_header(); ?>

<!--Why I Do It -->
<div class="band why">
	<div class="copy">
		<?php $recent = new WP_Query("page_id=36"); 
		while($recent->have_posts()) : $recent->the_post();?>
	 		<?php the_content(); ?>	
	 	<?php endwhile; ?>
 	</div>
</div>


<div class="band how">
	<div class="copy">
		<?php $recent = new WP_Query("page_id=38"); 
		while($recent->have_posts()) : $recent->the_post();?>
	 		<?php the_content(); ?>	
	 	<?php endwhile; ?>
 	</div>
</div>

<div class="band what">
	<div class="copy">
		<?php $recent = new WP_Query("page_id=41"); 
		while($recent->have_posts()) : $recent->the_post();?>
	 		<?php the_content(); ?>	
	 	<?php endwhile; ?>
	 </div>
</div>


<?php get_footer(); ?>