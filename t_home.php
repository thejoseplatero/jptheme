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


	<div class="band alt-band " id="still-bouncing">	
		<div class="copy">
				<?php $recent = new WP_Query("page_id=38"); 
				while($recent->have_posts()) : $recent->the_post();?>
			 		<?php the_content(); ?>	
			 	<?php endwhile; ?>
	 	</div>
	 	<div class="bounce-container" id="portfolio">
	 		<img class='still-bouncing-image' src="<?php bloginfo('url'); ?>/assets/still-bounce.svg" alt="flyingman">	
	 	</div>
	 	<div class="portfolio">
		 	<div class="project">
		 		<img src="<?php bloginfo('url'); ?>/assets/ijames.svg" alt="ijames">	
		 		</div>
		 	</div>
		 	<div class="project">
		 			<img src="<?php bloginfo('url'); ?>/assets/futari.svg" alt="futari">	
		 		
		 	</div>
		 	<div class="project">
		 			<img src="<?php bloginfo('url'); ?>/assets/honour.svg" alt="honour">	
		 		
		 	</div>
	 	</div>
	</div>

	<div class="band clearfix" id="services">
		<div class="service">
			<div class="bullet"></div>
			<h3>Responsive Design</h3>
			<p>Things that are responsive</p>
		</div>
		<div class="service">
			<div class="bullet"></div>
			<h3>Responsive Design</h3>
			<p>Things that are responsive</p>
		</div>
		<div class="service">
			<div class="bullet"></div>
			<h3>Responsive Design</h3>
			<p>Things that are responsive</p>
		</div>

			
	</div

	<div class="band  alt-band clearfix" id="pricing">
		<div class="pricing">
			<h1>sdksds</h1>
		</div>
	</div>
	<?php get_footer(); ?>

