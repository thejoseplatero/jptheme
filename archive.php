 <?php get_header(); ?>
 <h1> CATEGORY TEMPLATE</h1>
    
<?php 
  while(have_posts()):
    the_post();
    //display content from the post
?>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <h3><?php the_date(); ?> </h3>
    <?php the_excerpt(); ?>
    <nav>
      <a href="<?php the_permalink(); ?>">read more</a>
    </nav>


<?php
  endwhile;
?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>