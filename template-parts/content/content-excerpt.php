<?php
/**
 * Template part for displaying index page posts with thumbnails and excerpts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Destinations
 * @since 1.0.0
 */

?>

<figure class="index-post-thumbnail">
    <?php
        the_post_thumbnail( 'post-thumbnail', array( 'loading' => false ) );
    ?>
</figure>


<?php
	the_title( sprintf( '<h2 class="entry-title default-max-width"><a class="post-feed-title-link" href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
    the_excerpt();