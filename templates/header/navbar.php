<?php

include_once ('walker-navbar.php'); ?>

<nav class="navbar" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<a class="navbar-item" href="https://bulma.io">
			<img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
		</a>

		<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
		</a>
	</div>

	<div id="navbarBasicExample" class="navbar-menu">
		<?php
		$menu_args = array(
			'theme_location'=>'top',
			'container' => 'nav',
			'container_class' => 'navbar-start',
			'items_wrap'      => '%3$s',
			'walker' => new Nabvar_Walker );
		wp_nav_menu($menu_args);
		?>

		<div class="navbar-end">
			<div class="navbar-item">
				<div class="buttons">
					<a class="button is-primary">
						<strong>Sign up</strong>
					</a>
					<a class="button is-light">
						Log in
					</a>
				</div>
			</div>
		</div>
	</div>
</nav>