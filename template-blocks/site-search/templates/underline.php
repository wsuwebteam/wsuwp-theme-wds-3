<div class="wsu-site-search  wsu-style--quicklinks" method="get">
	<form class="wsu-site-search__tab<?php if ( 'site' === $args['context'] ) : ?> wsu-site-search--active<?php endif; ?>" data-context="site" method="get" action="<?php echo get_site_url(); ?>">
		<div class="wsu-search-bar wsu-style--underline">
			<div class="wsu-search-bar__wrapper">
				<input class="wsu-search-bar__input" type="text" aria-label="Search input" placeholder="Search" name="s" />
				<button class="wsu-search-bar__submit" aria-label="Submit Search"></button>
			</div>
		</div>
	</form>
	<form class="wsu-site-search__tab<?php if ( 'wsu' === $args['context'] ) : ?> wsu-site-search--active<?php endif; ?>" data-context="wsu" action="https://search.wsu.edu" method="get">
		<input type="hidden" name="sa" value="search">
		<div class="wsu-search-bar wsu-style--underline">
			<div class="wsu-search-bar__wrapper">
				<input class="wsu-search-bar__input" type="text" aria-label="Search input" placeholder="Search" name="q" />
				<button class="wsu-search-bar__submit" aria-label="Submit Search"></button>
			</div>
		</div>
	</form>
	<?php if ( 'show' === $args['showOptions'] ) : ?>
	<div class="wsu-search-options wsu-style--basic">
		<label class="wsu-search-options__option">
			<input class="wsu-search-options__option-input" type="radio" name="wsu-search-type" value="site"<?php if ( 'site' === $args['context'] ) : ?> checked="checked"<?php endif; ?> />
			<span class="wsu-search-options__option-label"><?php echo wp_kses_post( $args['siteLabel'] ); ?></span>
		</label>
		<label class="wsu-search-options__option">
			<input class="wsu-search-options__option-input" type="radio" name="wsu-search-type" value="wsu"<?php if ( 'wsu' === $args['context'] ) : ?> checked="checked"<?php endif; ?> />
			<span class="wsu-search-options__option-label">All wsu.edu</span>
		</label>
	</div>
	<?php endif; ?>
	<div class="wsu-decorator  wsu-decorator--style-lines-gray"></div>
</div>