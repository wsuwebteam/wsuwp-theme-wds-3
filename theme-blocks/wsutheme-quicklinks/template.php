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
					<div class="wsu-site-search  wsu-style--quicklinks" method="get">
						<form class="wsu-site-search__tab<?php if ( 'site' === $args['searchContext'] ) : ?> wsu-site-search--active<?php endif; ?>" data-context="site" method="get" action="<?php echo get_site_url(); ?>">
							<div class="wsu-search-bar wsu-style--underline">
								<div class="wsu-search-bar__wrapper">
									<input class="wsu-search-bar__input" type="text" aria-label="Search input" placeholder="Search" name="s" />
									<button class="wsu-search-bar__submit" aria-label="Submit Search"></button>
								</div>
							</div>
						</form>
						<form class="wsu-site-search__tab<?php if ( 'wsu' === $args['searchContext'] ) : ?> wsu-site-search--active<?php endif; ?>" data-context="wsu" action="https://search.wsu.edu" method="get">
							<input type="hidden" name="sa" value="search">
							<div class="wsu-search-bar wsu-style--underline">
								<div class="wsu-search-bar__wrapper">
									<input class="wsu-search-bar__input" type="text" aria-label="Search input" placeholder="Search" name="q" />
									<button class="wsu-search-bar__submit" aria-label="Submit Search"></button>
								</div>
							</div>
						</form>
						<?php if ( 'show' === $args['showSearchOptions'] ) : ?>
						<div class="wsu-search-options wsu-style--basic">
							<label class="wsu-search-options__option">
								<input class="wsu-search-options__option-input" type="radio" name="wsu-search-type" value="site"<?php if ( 'site' === $args['searchContext'] ) : ?> checked="checked"<?php endif; ?> />
								<span class="wsu-search-options__option-label"><?php echo wp_kses_post( $args['siteLabel'] ); ?></span>
							</label>
							<label class="wsu-search-options__option">
								<input class="wsu-search-options__option-input" type="radio" name="wsu-search-type" value="wsu"<?php if ( 'wsu' === $args['searchContext'] ) : ?> checked="checked"<?php endif; ?> />
								<span class="wsu-search-options__option-label">All wsu.edu</span>
							</label>
						</div>
						<?php endif; ?>
						<div class="wsu-decorator  wsu-decorator--style-lines-gray"></div>
					</div>
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