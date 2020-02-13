<?php get_header(); ?>

<nav id="navbar" class="navbar navbar-expand-sm bg-dark navbar-dark my-3">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<?php
		wp_nav_menu(
			array(
				'theme_location'    => 'principal',
				'depth'             => 5,
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker()
			)
		);
		?>


<!-- Navbar -->
<!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#!">Accueil <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
		<a class="nav-link primary" href="#!">Articles</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="#!">A propos</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="#!">Test</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="#!">Contact</a>
	  </li>
    </ul>	
	</div>
</nav> -->