<?php

$sidebar = ( ! empty( $args['sidebar'] ) ) ? $args['sidebar'] : '';

?>
<!-- wp:wsutheme/global-header /-->
<!-- wp:wsutheme/site-header /-->
<!-- wp:wsutheme/quicklinks /-->
<!-- wp:wsutheme/navigation-mobile /-->
<!-- wp:wsutheme/navigation-horizontal /-->
<!-- wp:wsutheme/navigation-vertical /-->
<!-- wp:wsutheme/wrapper-site -->
    <!-- wp:wsutheme/navigation-audience /-->
    <!-- wp:wsutheme/wrapper-content {"sidebar":"<?php echo esc_attr( $sidebar ); ?>"} -->
	<!-- wp:wsutheme/wrapper-main -->