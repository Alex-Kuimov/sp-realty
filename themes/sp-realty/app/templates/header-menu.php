<?php
/**
 * Header menu template
 *
 * @package Html templates
 */

?>

<!--begin navigation-->
<nav class="menu">
	<span class="mobile__menu-close"><i class="fas fa-times"></i></span>
	<ul class="menu__wrapper menu__parrent">
		<?php
		wp_nav_menu(
			array(
				'container'      => 'ul',
				'items_wrap'     => '%3$s',
				'theme_location' => 'menu-top',
			)
		);
		?>
	</ul>
</nav>
<!--end navigation-->
