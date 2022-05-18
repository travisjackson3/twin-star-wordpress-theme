<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twin_Star
 * @since Twin Star 1.0
 */

$entry_header_classes = '';

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}

?>

<header class="entry-header has-text-align-center<?php echo esc_attr( $entry_header_classes ); ?>">



</header><!-- .entry-header -->
