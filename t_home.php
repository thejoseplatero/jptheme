 <?php   /* Template Name: Home Template */ ?>


	<?php get_header(); ?>

	<div class="band" id="bouncing-ball">
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


	<div class="band alt-band" id='still-bouncing'>	
		<div class="copy">
				<?php $recent = new WP_Query("page_id=38"); 
				while($recent->have_posts()) : $recent->the_post();?>
			 		<?php the_content(); ?>	
			 	<?php endwhile; ?>
	 	</div>
	 	<div class="bounce-container">
	 		<img class='still-bouncing-image' src="<?php bloginfo('url'); ?>/assets/still-bounce.svg" alt="flyingman">	
	 	</div>
	 	<div class="project project-blue">
	 		<p>IJAMESJONES</p>
	 	</div>
	 	<div class="project">
	 		<p>Eh oh Oh Eh</p>
	 	</div>
	 	<div class="project">
	 		<p>Eh oh Oh Eh</p>
	 	</div>
	 	<div class="project">
	 		<p>Eh oh Oh Eh</p>
	 	</div>
	</div>

	<div class="band clearfix">
		<div class="service">
			<p>Eh oh Oh Eh</p>
		</div>
	</div>

	<?php get_footer(); ?>

