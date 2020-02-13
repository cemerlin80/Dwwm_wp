<?php get_header(); ?>

<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
			

			
				<!-- Affiche le logo -->
				<body <?php body_class(); ?>>
					<header class="header">
						
						<a href="<?php echo home_url('/'); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/youpi_logo.png" alt="Logo">
						</a>
						<?php
						// Fonction pour afficher le logo

						$custom_logo_id = get_theme_mod('custom_logo');

						$aLogo = wp_get_attachment_image_src($custom_logo_id, 'medium');

						if (has_custom_logo()) { // Si un logo a été défini
							echo '<img src="' . esc_url($aLogo[0]) . '" alt="' . get_bloginfo('name') . '" class="class-fluid">';
						} else {   // Sinon on affiche le nom du site
							echo '<h1>' . get_bloginfo('name') . '</h1>';
						}
						?>

						<!-- Afficher le logo dans header -->

						<!-- Ajouter balises a , pour cliquer sur l'îcone -->

						<!-- <img src="http://localhost/wordpress/wp-content/themes/themeperso/assets/images/image.jpg" alt="Mon premier site Worpdress" class="img-fluid">  -->
				</div> 
			</div> <!-- .row -->
			<div id="menu" role="navigation" class="border-top border-bottom m-3">
				<ul>
					<li class="page_item page-item-36"><a href="mentions-legales/">Mentions légales</a></li>
					<li class="page_item page-item-2"><a href="page-d-exemple/">Page d’exemple</a></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-8">
					<h1><a href="http://localhost/wordpress522/2019/10/22/maecenas-luctus-justo/" title="Qu’est-ce que le Lorem Ipsum?">Qu’est-ce que le Lorem Ipsum?</a></h1>
					<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l’imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n’a pas […]</p>
					<div>
					</div>
					<hr>
					<h1><a href="http://localhost/wordpress522/2019/10/22/donec-maximus-pellentesque-nisi/" title="Pourquoi l’utiliser?">Pourquoi l’utiliser?</a></h1>
					<p>.On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L’avantage du Lorem Ipsum sur un texte générique comme ‘Du texte. Du texte. Du texte.’ est qu’il possède une distribution de lettres plus ou moins normale, […] </p>
					<div></div>
					<hr>
					<h1><a href="calhost/wordpress522/2019/10/22/lorem-ipsum/" title="D'où vient-il ?">D'où vient-il ?</a></h1>
					<p>Contrairement à une opinion répandue, le Lorem Ipsum n’est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s’est intéressé à un des mots latins les plus obscurs, consectetur, […]</p>
					<div></div>
					<hr>
					<h1><a href="http://localhost/wordpress522/2019/08/11/bonjour-tout-le-monde/" title="Bonjour tout le monde !">Bonjour tout le monde !</a></h1>
					<p>Bienvenue sur WordPress. Ceci est votre premier article. Modifiez-le ou supprimez-le, puis commencez à écrire&nbsp;!</p>
					<div></div>
					<hr>

					<?php
					if (have_posts()) : // S'il y a des articles 
						while (have_posts()) : the_post() // Tant qu'il y a des articles, alors pour chaque article on affiche : 
					?>
							<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<?php
							echo "<div>" . the_excerpt() . "</div>";
							echo "<hr>";
						endwhile;
					endif;

					// the_permalink() = url de la page de l'article (détail)
					// the_title = titre de l'article
					// the_excerpt = résumé de l'article (decription courte)
					?>

					<!-- Afficher catégories, mots-clés, images/média => voir documentation -->
					<h1><?php the_title('test'); ?></h1>
				</div>
				<!-- sidebar.php -->
				<div class="col-4 border border-dark">
					[ SIDEBAR ]
				</div>
				<br>
				<br>
			</div>

		</div> <!-- .container -->
		<?php get_template_part('front-page'); ?>
		<?php get_footer(); ?>