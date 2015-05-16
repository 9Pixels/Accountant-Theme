<?php
/**
 *	Customizer
 */
if( !function_exists( 'accountant_customizer' ) ) {
	add_action( 'customize_register', 'accountant_customizer', 50 );
	function accountant_customizer( $wp_customize ) {
		$wp_customize->remove_setting( 'lawyeria_lite_header_logo' );
		$wp_customize->remove_control( 'lawyeria_lite_header_logo' );

		$wp_customize->remove_setting( 'lawyeria_lite_frontpage_thecontent_image' );
		$wp_customize->remove_control( 'lawyeria_lite_frontpage_thecontent_image' );

		$wp_customize->remove_setting( 'lawyeria_lite_frontpage_thecontent_title' );
		$wp_customize->remove_control( 'lawyeria_lite_frontpage_thecontent_title' );

		$wp_customize->remove_setting( 'lawyeria_lite_frontpage_thecontent_content' );
		$wp_customize->remove_control( 'lawyeria_lite_frontpage_thecontent_content' );
	}
}
?>