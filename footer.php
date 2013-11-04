<footer>
	<div class="flag">
		<img src="<?php bloginfo('url'); ?>/assets/flag.svg" alt="canadian flag">
		<p class ="made-in-canada">Proudly Made in Canada</p>
		<!--menu-footer-menu-container-->
		 <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
  	</div>
</footer>
 
  <?php wp_footer(); ?>

<div/>  <!-- End Fluid Layout -->
</body>
</html>

