<div class="wsu-article wsu-style--index">
	<div class="wsu-article__inner-wrapper">
		<?php WSUWP\Theme\WDS\Theme::render_block(
			'article-header',
			array(
				'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayBylineBefore', $args['displayBylineBefore'], 'hide' ),
				'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayPublishDateBefore', $args['displayPublishDateBefore'], 'hide' ),
				'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayShareBefore', $args['displayShareBefore'], 'hide' ),
				'headingTag'         => 'h2',
				'linkHeading'        => true,
				'displayBreadcrumbs' => 'hide',
			)
		); ?>
		<div class="wsu-article__caption">
			<?php the_excerpt(); ?>
		</div>
		<?php WSUWP\Theme\WDS\Theme::render_block(
			'article-footer',
			array(
				'displayByline'      => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayBylineAfter', $args['displayBylineAfter'], 'hide' ),
				'displayPublishDate' => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayPublishDateAfter', $args['displayPublishDateAfter'], 'show' ),
				'displayShare'       => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayShareAfter', $args['displayShareAfter'], 'hide' ),
				'displayCategories'  => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayCategories', $args['displayCategories'], 'show' ),
				'displayTags'        => WSUWP\Theme\WDS\Theme::get_template_option( $template, 'displayTags', $args['displaytags'], 'show' ),
			)
		); ?>
	</div>
	<?php if ( has_post_thumbnail() )  : ?><div class="wsu-article__thumbnail">
		<?php WSUWP\Theme\WDS\Theme::render_block( 'article-image', $template_args ); ?>
	</div><?php endif; ?>
</div>
