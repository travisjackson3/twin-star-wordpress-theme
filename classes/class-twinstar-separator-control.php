<?php
/**
 * Customizer Separator Control settings for this theme.
 *
 * @package WordPress
 * @subpackage Twin_Star
 * @since Twin Star 1.0
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	if ( ! class_exists( 'twinstar_Separator_Control' ) ) {
		/**
		 * Separator Control.
		 *
		 * @since Twin Star 1.0
		 */
		class twinstar_Separator_Control extends WP_Customize_Control {
			/**
			 * Render the hr.
			 *
			 * @since Twin Star 1.0
			 */
			public function render_content() {
				echo '<hr/>';
			}

		}
	}
}
