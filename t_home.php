 <?php   /* Template Name: Home Template */ ?>


<?php get_header(); ?>


<div class="band" id="bouncing-ball">
	<div class="copy">
		<img class='bouncing-image' src="/jose/assets/ball3.svg" alt="ball">	
	 		<?php $recent = new WP_Query("page_id=36"); 
	 		while($recent->have_posts()) : $recent->the_post();?>
	 	 		<?php the_content(); ?>	
	 	 	<?php endwhile; ?>
 	</div>
</div>


<div class="band alt-band" id='still-bouncing'>	
	<div class="copy">
		<img class='still-bouncing-image' src="/jose/assets/still-bounce.svg" alt="flyingman">	
			<?php $recent = new WP_Query("page_id=38"); 
			while($recent->have_posts()) : $recent->the_post();?>
		 		<?php the_content(); ?>	
		 	<?php endwhile; ?>
 	</div>
</div>

<?php get_footer(); ?>