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
	 	<div class="contact">
	 		<a href="#" class="button">Services</a>
	 	    <a href="mailto:contact@joseplatero" class="button">Email</a>
	 	    <a href="http://twitter.com/thejoseplatero" class="button">Twitter</a>
	 	    <a href="http://www.linkedin.com/in/joseplatero" class="button">LinkedIn</a>
	 	    <a href="https://github.com/thejoseplatero/jptheme" class="button">Github</a>
	 	   
	 	</div>
 	</div>
</div>

<?php get_footer(); ?>