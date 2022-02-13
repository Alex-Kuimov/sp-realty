<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sp-realty
 */

?>


<!--begin footer-->
<footer class="footer section">
	<div class="container">
		<?php echo wp_kses_post( site\Part::get( 'footer_menu' ) ); ?>

		<?php echo wp_kses_post( site\Part::get( 'footer_copyright' ) ); ?>

		<?php echo wp_kses_post( site\Part::get( 'footer_widget' ) ); ?>
	</div>
</footer>
<div class="to--top">
	<i class="fas fa-chevron-up" aria-hidden="true"></i>
</div>

<!--end footer-->


<?php wp_footer(); ?>

</body>
</html>
