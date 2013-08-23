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
	<div class="video-container-small">
		
	</div>

	<div class="copy">
		<?php $recent = new WP_Query("page_id=41"); 
		while($recent->have_posts()) : $recent->the_post();?>
	 		<?php the_content(); ?>	
	 	<?php endwhile; ?>
	</div>
	<div class="contact">
			<a href="mailto:contact@joseplatero" class="button">Email</a>
			<a href="twitter.com/thejoseplatero" class="button">Twitter</a>
			<a href="http://www.linkedin.com/in/joseplatero" class="button">LinkedIn</a>
			<a href="https://github.com/thejoseplatero/jptheme" class="button">Github</a>
			<a href="#" class="button">Blog</a>
	</div>
</div>


<?php get_footer(); ?>