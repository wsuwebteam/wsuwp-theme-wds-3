<div class="<?php echo esc_attr( $args['className'] ); ?>">
	<?php if ( ! empty( $args['linkImage'] ) ) : ?><a href="<?php the_permalink(); ?>" <?php if ( ! empty( $args['hidden'] ) ) : ?>tabindex="-1" aria-hidden="true"<?php endif; ?> ><?php endif; ?>
		<?php echo $content; ?>
	<?php if ( ! empty( $args['linkImage'] ) ) : ?></a><?php endif; ?>
</div>