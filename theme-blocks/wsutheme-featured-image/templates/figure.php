<figure class="<?php echo esc_attr( $args['className'] ); ?>">
	<div class="wsu-image-frame wsu-image--ratio-16-9">
		<?php echo $content; ?>
	</div>
	<?php if ( ! empty( $args['image_caption'] )) : ?>
	<figcaption>
		<?php echo wp_kses_post( $args['image_caption'] ); ?>
	</figcaption>
	<?php endif; ?>
</figure>