<!-- Page qui affiche un article -->

<?php get_header(); ?>

	<main>
		<?php while (have_posts()) : the_post(); ?>		
				<h1><?php the_title(); ?></h1>
				<hr>
   Publié le <strong><?php the_date(); ?></strong> par <strong><?php the_author(); ?></strong>
   <hr> 
				<?php the_content(); ?>			
		<?php endwhile;  ?>
	</main>
	
    <?php get_footer(); ?>
