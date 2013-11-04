 <?php   /* Template Name: Home Template */ ?>


	<?php get_header(); ?>

	<div class="band clearfix"  id="bouncing-ball">
		<div class="copy">
				<?php $recent = new WP_Query("page_id=36"); 
		 		while($recent->have_posts()) : $recent->the_post();?>
		 	 		<?php the_content(); ?>	
		 	 	<?php endwhile; ?>
	 	</div>
	 	<div class="bounce-container">
	 		<img class='bouncing-image' src="<?php bloginfo('url'); ?>/assets/ball3.svg" alt="ball">	
	 	</div>	
	</div>


	<div class="band alt-band " id='still-bouncing'>	
		<div class="copy">
				<?php $recent = new WP_Query("page_id=38"); 
				while($recent->have_posts()) : $recent->the_post();?>
			 		<?php the_content(); ?>	
			 	<?php endwhile; ?>
	 	</div>
	 	<div class="bounce-container">
	 		<img class='still-bouncing-image' src="<?php bloginfo('url'); ?>/assets/still-bounce.svg" alt="flyingman">	
	 	</div>
	 	<div class="portfolio">
		 	<div class="project-box">
		 		<img src="<?php bloginfo('url'); ?>/assets/ijames.svg" alt="ijames">	
		 		</div>
		 	</div>
		 	<div class="project-box">
		 			<img src="<?php bloginfo('url'); ?>/assets/futari.svg" alt="futari">	
		 		
		 	</div>
		 	<div class="project-box">
		 			<img src="<?php bloginfo('url'); ?>/assets/honour.svg" alt="honour">	
		 		
		 	</div>
	 	</div>
	</div>

	<div class="band clearfix">
		<div class="service">
			
		</div>

	</div>

	<?php get_footer(); ?>

