<?php
/**
 * Zoologist functions and definitions
 *
 * @package Zoologist
 */

if ( ! function_exists( 'zoologist_theme_name' ) ) :
	/**
	 * Returns the translatable theme name.
	 *
	 * Zoologist ships only block templates and theme.json, so none of its
	 * strings live in PHP. This keeps the theme name translatable under the
	 * theme's own text domain, which the parent loads from `languages/`.
	 *
	 * @return string The translated theme name.
	 */
	function zoologist_theme_name() {
		return __( 'Zoologist', 'zoologist' );
	}
endif;
