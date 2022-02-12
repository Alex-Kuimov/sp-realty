<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sp-realty
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header class="header">
		<div class="container header__wrapper">
			<?php echo wp_kses_post( site\Part::get( 'header_logo' ) ); ?>

			<?php echo wp_kses_post( site\Part::get( 'header_menu' ) ); ?>

			<?php echo wp_kses_post( site\Part::get( 'header_widget' ) ); ?>
		</div>
	</header>
