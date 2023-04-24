<div class="wsu-header-utility-bar ">
	<button class="wsu-header-utility-bar__quicklinks wsu-slide-in-panel--open" data-panel="wsu-quicklinks-panel" id="open-modal">
		Quicklinks / Search
		<i class="wsu-header-utility-bar__icon"></i>
	</button>
	<a href="<?php echo esc_url( $args['primaryActionLink'] ); ?>" class="wsu-header-utility-bar__cta"><?php echo wp_kses_post( $args['primaryActionText'] ); ?></a>
</div>
<nav id="wsu-quicklinks-panel" class="wsu-slide-in-panel wsu-quicklinks wsu-slide-in-panel--width-large wsu-has-background--dark wsu-slide-in-panel--style-crimson-mark wsu-mode--dark" aria-expanded="false" aria-haspopup="true" aria-label="Quick Links menu">
	<button class="wsu-slide-in-panel__overlay wsu-slide-in-panel--close">Close Quick Links</button>
	<div class="wsu-slide-in-panel__panel wsu-quicklinks__panel wsu-background--gradient-dark">
		<div class="wsu-slide-in-panel__panel-inner">
			<div class="wsu-quicklinks__panel-content">
				<div class="wsu-quicklinks__close">
					<button class="wsu-button  wsu-slide-in-panel--close wsu-button--style-action">Close Search</button>
				</div>
				<div class=" wsu-quicklinks__search">
				<?php WSUWP\Theme\WDS\Theme::render_block(
					'site-search',
					array(
						'style' => 'underline',
						'showOptions' => $args['showSearchOptions'],
						'context'     => $args['searchContext'],
					)
				); ?>
				</div>
				<div class="wsu-quicklinks__content">
					<?php if ( has_nav_menu( 'quicklinks' ) ) : ?>
						<h2>Quick Links</h2>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'quicklinks',
									'menu_class'     => 'wsu-list wsu-list--style-boxed wsu-list--columns-2 wsu-breakpoint--none wsu-list--underline-hover  wsu-has-background--dark',
									'container'      => '',
								)
							);
						?>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'wsu_wds_quicklinks' ) ) : ?>
						<div class="wsu-widget-area">
							<?php dynamic_sidebar( 'wsu_wds_quicklinks' ); ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="wsu-quicklinks__footer">
					<?php if ( is_active_sidebar( 'wsu_wds_quicklinks_footer' ) ) : ?>
						<div class="wsu-widget-area">
							<?php dynamic_sidebar( 'wsu_wds_quicklinks_footer' ); ?>
						</div>
					<?php endif; ?>
					<div class="wsu-quicklinks__footer-decorator">
						<div class="wsu-decorator wsu-decorator--style-lines-gray"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>
