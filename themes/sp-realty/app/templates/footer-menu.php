<?php
/**
 * Footer menu template
 *
 * @var $args
 * @package Html templates
 */

?>

<div class="footer__item">
	<div class="footer-menu">
		<?php if ( ! empty( $args ) ) : ?>
			<nav class="footer-menu__wrapper">
				<ul class="footer-menu__container">
					<?php foreach ( $args as $item ) : ?>
						<li class="footer-menu__item">
							<a href="<?php echo esc_url( $item['url'] ); ?>" class="<?php echo esc_attr( $item['class'] ); ?>"><?php echo esc_html( $item['title'] ); ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</nav>
		<?php endif; ?>
	</div>
</div>
