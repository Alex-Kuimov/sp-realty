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
            <!--begin logo-->
            <div class="logo">
                <?php
                if(has_custom_logo()){
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo_img_array = wp_get_attachment_image_src($custom_logo_id, 'full');
                    $logo_img_src   = $logo_img_array[0];

                    echo '<a href="'.esc_url(get_home_url()).'" title="'.esc_attr(get_bloginfo('title')).'"><img src="'.esc_url($logo_img_src).'" alt="'.esc_attr(get_bloginfo('title')).'" title="'.esc_attr(get_bloginfo('title')).'" class="logo--image"></a>';
                } else {
                    echo '<a class="logo__title" href="'.esc_url(get_home_url()).'" title="'.esc_attr(get_bloginfo('title')).'">'.esc_html(get_bloginfo('title')).'</a>';
                    echo '<p class="logo__description">'.esc_html(get_bloginfo('description')).'</p>';
                }
                ?>
            </div>
            <!--end logo-->

            <!--begin navigation-->
            <nav class="menu">
                <span class="mobile__menu-close"><i class="fas fa-times"></i></span>
                <ul class="menu__wrapper menu__parrent">
                    <?php
                    wp_nav_menu( array(
                        'container'       => 'ul',
                        'items_wrap'    => '%3$s',
                        'theme_location' => 'menu-top',
                    ) );
                    ?>
                </ul>
            </nav>
            <!--end navigation-->

            <!--begin widget-->
            <div class="header-widget">
                <div class="header-widget__wrapper">
                    <?php dynamic_sidebar('social_header');?>
                </div>

                <span class="mobile__filter"><i class="fas fa-search-location"></i></span>
                <span class="mobile__menu"><i class="fas fa-bars"></i></span>
            </div>
            <!--end widget-->
        </div>
    </header>