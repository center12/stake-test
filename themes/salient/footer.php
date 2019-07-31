<?php
/**
* The template for displaying the StakeGlobal Theme footer. 
* MJ: need to go back and render for all non-index pages.
* @version 0.1.2
*/

// Exit if accessed directly

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$nectar_options = get_nectar_theme_options();
$header_format  = ( !empty($nectar_options['header_format']) ) ? $nectar_options['header_format'] : 'default';

?>

<div id="footer-outer" <?php nectar_footer_attributes(); ?>>
	
	<?php
	
	get_template_part( 'includes/partials/footer/call-to-action' );
	
	get_template_part( 'includes/partials/footer/main-widgets' );
	
	get_template_part( 'includes/partials/footer/copyright-bar' );
	
	?>
	
</div><!--/footer-outer section-->

<?php

nectar_hook_before_outer_wrap_close();

get_template_part( 'includes/partials/footer/off-canvas-navigation' );

?>

</div> <!--/ajax-content-wrap-->

<?php
	
	// Boxed theme option closing div.
	// 
	if ( ! empty( $nectar_options['boxed_layout'] ) && 
	'1' === $nectar_options['boxed_layout'] && 
	'left-header' !== $header_format ) {

		echo '</div><!--/boxed closing div-->'; 
	}
	
	get_template_part( 'includes/partials/footer/back-to-top' );
	
	get_template_part( 'includes/partials/footer/body-border' );
	
	wp_footer();
// MJ: review all salient ref's. moving to sg_variable...
	nectar_hook_after_wp_footer();
	
	nectar_hook_before_body_close();
	
?>
	
</body>
</html>