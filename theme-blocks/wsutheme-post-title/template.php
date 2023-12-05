<?php
	if ( ! empty( $content ) ) : ?>
	<?php if ( ! empty( $args['tag'] ) ) : ?><<?php echo esc_attr( $args['tag'] ); ?>><?php endif; ?>
		<?php if ( ! empty( $args['link'] ) ) : ?><a href="<?php the_permalink(); ?>"><?php endif; ?>
		<?php echo $content; ?>
		<?php if ( ! empty( $args['link'] ) ) : ?></a><?php endif; ?>
	<?php if ( ! empty( $args['tag'] ) ) : ?></<?php echo esc_attr( $args['tag'] ); ?>><?php endif; ?>
<?php endif; ?>
