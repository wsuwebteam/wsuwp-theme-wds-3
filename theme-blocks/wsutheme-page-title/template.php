<<?php echo esc_attr( $args['tag'] ); ?>>
	<?php if ( ! empty( $args['link'] ) ) : ?><a href="<?php the_permalink(); ?>"><?php endif; ?>
	<?php echo $content; ?>
	<?php if ( ! empty( $args['link'] ) ) : ?></a><?php endif; ?>
</<?php echo esc_attr( $args['tag'] ); ?>>
