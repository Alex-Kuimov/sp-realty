<?php
/**
 * Header logo template
 *
 * @var $logo_src
 * @package Html templates
 */

?>

<!--begin logo-->
<div class="logo">
	<?php if ( has_custom_logo() ) : ?>
		<a href="<?php echo esc_url( get_home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>">
			<img src="<?php echo esc_url( $logo_src ); ?>" alt=" <?php echo esc_attr( get_bloginfo( 'title' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>" class="logo--image">
		</a>
	<?php else : ?>
		<a class="logo__title" href="'<?php echo esc_url( get_home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>"><?php echo esc_html( get_bloginfo( 'title' ) ); ?></a>
		<p class="logo__description"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
	<?php endif; ?>
</div>
<!--end logo-->
