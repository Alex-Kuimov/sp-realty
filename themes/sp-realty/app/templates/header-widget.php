<?php
/**
 * Header widget template
 *
 * @package Html templates
 */

?>

<!--begin widget-->
<div class="header-widget">
	<div class="header-widget__wrapper">
		<?php dynamic_sidebar( 'social_header' ); ?>
	</div>

	<span class="mobile__filter"><i class="fas fa-search-location"></i></span>
	<span class="mobile__menu"><i class="fas fa-bars"></i></span>
</div>
<!--end widget-->