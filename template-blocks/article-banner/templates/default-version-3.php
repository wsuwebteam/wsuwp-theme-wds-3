<figure class="wsu-article-hero">
	<div class="wsu-image-frame wsu-image--ratio-16-9">
		<?php WSUWP\Theme\WDS\Theme::render_block( 'article-image', $args ); ?>
	</div>
	<?php if ( ! empty( $args['image_caption'] )) : ?>
	<figcaption>
		<?php echo wp_kses_post( $args['image_caption'] ); ?>
	</figcaption>
	<?php endif; ?>
</figure>
