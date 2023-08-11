<nav class="<?php echo esc_attr( $args['className'] ); ?>">
	<div class="wsu-navigation-audience__label"><?php echo wp_get_nav_menu_name( 'audience' ); ?></div>
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'audience',
				'menu_class'     => 'wsu-navigation-audience__menu',
				'container'      => '',
			)
		);
	?>
</nav>