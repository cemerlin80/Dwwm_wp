<?php get_header(); ?>

<h1><?php bloginfo('name'); ?></h1>
<main id="accueil">
	<?php while (have_posts()) : the_post(); ?>
		<article>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('medium'); ?>
				<h2><?php the_title(); ?></h2>
			</a>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>">
				Lire
			</a>

			<!-- the_content = affiche le contenu -->
			<!-- the_excerpt = affiche le résumé d'un article -->
		</article>
	<?php endwhile;  ?>

	<div id="menu" role="navigation" class="border-top border-bottom m-3">
		<ul>
			<li class="page_item page-item-36"><a href="mentions-legales/">Mentions légales</a></li>
			<li class="page_item page-item-2"><a href="page-d-exemple/">Page d’exemple</a></li>
		</ul>
	</div>

	<!-- sidebar -->
	<div class="col-4 border border-dark mr-2">
		<?php get_sidebar('before-front-page'); ?>
	</div>

</main>

<?php get_footer(); ?>