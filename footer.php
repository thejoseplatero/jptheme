<footer>
	<div class="flag cleafix">
		<img src="<?php bloginfo('url'); ?>/assets/flag.svg" alt="canadian flag">
		<p class ="made-in-canada">Proudly Made in Canada</h3>
		<!--menu-footer-menu-container-->
		 <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
  	</div>
</footer>
 
  <?php wp_footer(); ?>

 </div> <!-- end wrapper -->
</body>
</html>