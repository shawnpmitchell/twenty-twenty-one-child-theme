<?php
/**
 * Displays the site header.
 *
 * @package Destinations
 * @since 1.0.0
 */

$destinations_site_title    = get_bloginfo( 'name' );
$destinations_description  = get_bloginfo( 'description', 'display' );
?>

<div class="dest-page-margin-gold"></div>

<header id="masthead" class="site-header" role="banner">

    <?php get_template_part( 'template-parts/header/site-nav' ); ?>

    <div class="site-title-wrapper">
        <p class="dest-site-title"><a class="dest-site-title-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $destinations_site_title ); ?></a></p>

        <p class="dest-site-description"><span class="with-site-description">with</span> Shawn & Tricia
	    </p>
    </div>


</header><!-- #masthead -->
