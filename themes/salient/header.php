<!DOCTYPE html>
<!--included updated header for transparent nav w/ animated background MJ: check compression issues...-->
<!-- MJ: Need to include Branch // GA tracking // Segment here only {keep h clean to avoid clash with Optimize}-->

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83412108-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-83412108-8');
</script>


<html <?php language_attributes(); ?> class="no-js">
<head>
	
<!-- Branch.io snippet for mobile header-->
	
<script type="text/javascript">
(function(b,r,a,n,c,h,_,s,d,k){if(!b[n]||!b[n]._q){for(;s<_.length;)c(h,_[s++]);d=r.createElement(a);d.async=1;d.src="https://cdn.branch.io/branch-latest.min.js";k=r.getElementsByTagName(a)[0];k.parentNode.insertBefore(d,k);b[n]=h}})(window,document,"script","branch",function(b,r){b[r]=function(){b._q.push([r,arguments])}},{_q:[],_v:1},"addListener applyCode autoAppIndex banner closeBanner closeJourney creditHistory credits data deepview deepviewCta first getCode init link logout redeem referrals removeListener sendSMS setBranchViewData setIdentity track validateCode trackCommerceEvent logEvent disableTracking".split(" "), 0);
branch.init('key_live_acqYvG8frsQLMIuG3BY3hekjwBeV34sB');
</script>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<?php
	
	$nectar_options = get_nectar_theme_options();
	
	if ( ! empty( $nectar_options['responsive'] ) && '1' === $nectar_options['responsive'] ) { 
		echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />';
	} else { 
		echo '<meta name="viewport" content="width=1200" />';
	} 
	
	// Shortcut icon fallback
	 
	if ( ! empty( $nectar_options['favicon'] ) && ! empty( $nectar_options['favicon']['url'] ) ) {
		echo '<link rel="shortcut icon" href="'. esc_url( nectar_options_img( $nectar_options['favicon'] ) ) .'" />';
	}
	
	wp_head();
	
	?>
	
</head>
	
<?php

$nectar_header_options = nectar_get_header_variables();

?>

<body <?php body_class(); nectar_body_attributes(); ?>>
	
	<?php
	
	nectar_hook_after_body_open();
	
	nectar_hook_before_header_nav();
	
	// Boxed theme option opening div.
	if ( $nectar_header_options['n_boxed_style'] ) {
		echo '<div id="boxed">';
	}
	
	get_template_part( 'includes/partials/header/header-space' );
	
	?>
	
	<div id="header-outer" <?php nectar_header_nav_attributes(); ?>>
		
		<?php
		
		get_template_part( 'includes/partials/header/secondary-navigation' );
		
		if ('ascend' !== $nectar_header_options['theme_skin'] && 
			'left-header' !== $nectar_header_options['header_format']) {
			get_template_part( 'includes/header-search' );
		}
		
		get_template_part( 'includes/partials/header/header-menu' );
		
		
		?>
		
	</div>
	
	<?php
	
	if ( ! empty( $nectar_options['enable-cart'] ) && '1' === $nectar_options['enable-cart'] ) {
		get_template_part( 'includes/partials/header/woo-slide-in-cart' );
	}
	
	if ( 'ascend' === $nectar_header_options['theme_skin'] || 
		'left-header' === $nectar_header_options['header_format'] && 
		'false' !== $nectar_header_options['header_search'] ) {
		get_template_part( 'includes/header-search' ); 
	}
	
	?>
	
	<div id="ajax-content-wrap">
		
		<?php
		
		nectar_hook_after_outer_wrap_open();
