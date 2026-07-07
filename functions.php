<?php
/**
 * AcmePhoto functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage AcmePhoto
 */


/**
 *  Default Theme Options
 *
 * @since AcmePhoto 1.0.0
 *
 * @param null
 * @return array $acmephoto_default_theme_options
 */
if ( ! function_exists( 'acmephoto_get_default_theme_options' ) ) :
	function acmephoto_get_default_theme_options() {

		$default_theme_options = array(
			/*feature section options*/
			'acmephoto-enable-feature'            => 1,
			'acmephoto-feature-enable-social'     => '',
			'acmephoto-feature-page'              => 0,
			'acmephoto-feature-height'            => 60,
			'acmephoto-feature-button-option'     => 'search',

			/*header options*/
			'acmephoto-header-logo'               => '',
			'acmephoto-header-id-display-opt'     => 'title-and-tagline',
			'acmephoto-menu-position-options'     => 'top-normal',
			'acmephoto-facebook-url'              => '',
			'acmephoto-twitter-url'               => '',
			'acmephoto-instagram-url'             => '',
			'acmephoto-enable-social'             => '',

			/*footer options*/
			'acmephoto-enable-footer-social'      => '',
			'acmephoto-footer-copyright'          => __( '&copy; All Right Reserved 2018', 'acmephoto' ),
			'acmephoto-footer-power-text'         => 1,

			/*layout/design options*/
			'acmephoto-default-layout'            => 'fullwidth',

			'acmephoto-sidebar-layout'            => 'right-sidebar',
			'acmephoto-front-page-sidebar-layout' => 'no-sidebar',
			'acmephoto-archive-sidebar-layout'    => 'no-sidebar',
			'acmephoto-single-sidebar-layout'     => 'right-sidebar',
			'acmephoto-enable-sticky-sidebar'     => '',
			'acmephoto-pagination-option'         => 'default',

			/*blog archive*/
			'acmephoto-blog-enable-gap'           => 1,
			'acmephoto-blog-show-title'           => 1,
			'acmephoto-blog-show-cats'            => 1,
			'acmephoto-blog-show-comments'        => '',
			'acmephoto-blog-show-date'            => '',
			'acmephoto-blog-show-author'          => 1,

			/*color*/
			'acmephoto-primary-color'             => '#F88C00',

			/*custom css*/
			'acmephoto-custom-css'                => '',

			/*single post options*/
			'acmephoto-blog-archive-image-size'   => 'large',

			'acmephoto-show-related'              => 1,
			'acmephoto-related-title'             => __( 'Related posts', 'acmephoto' ),
			'acmephoto-related-post-display-from' => 'cat',
			'acmephoto-single-image-size'         => 'full',

			/*theme options*/
			'acmephoto-search-placholder'         => __( 'Search', 'acmephoto' ),
			'acmephoto-show-breadcrumb'           => '',

			/*Reset*/
			'acmephoto-reset-options'             => '0',
			'acmephoto-you-are-here-text'         => __( 'You are here', 'acmephoto' ),
		);
		return apply_filters( 'acmephoto_default_theme_options', $default_theme_options );
	}
endif;


if ( ! function_exists( 'acmephoto_get_theme_options' ) ) :
	/**
	 * Get theme options
	 *
	 * @since AcmePhoto 1.0.0
	 *
	 * @return array acmephoto_theme_options
	 */
	function acmephoto_get_theme_options() {
		static $cached_theme_options = null;

		// Bypass cache when in Customizer.
		if ( null !== $cached_theme_options && ! is_customize_preview() ) {
			return $cached_theme_options;
		}

		$acmephoto_default_theme_options = acmephoto_get_default_theme_options();
		$acmephoto_get_theme_options     = get_theme_mod( 'acmephoto_theme_options' );

		if ( is_array( $acmephoto_get_theme_options ) ) {
			$cached_theme_options = array_merge( $acmephoto_default_theme_options, $acmephoto_get_theme_options );
		} else {
			$cached_theme_options = $acmephoto_default_theme_options;
		}

		return $cached_theme_options;
	}
endif;

/**
 * require int.
 */
require_once trailingslashit( get_template_directory() ) . 'acmethemes/init.php';
