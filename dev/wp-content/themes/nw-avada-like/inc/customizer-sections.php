<?php
/**
 * Customizer controls for NexRise sections.
 *
 * @package nw-avada-like
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'nx_register_section_media_customizer' ) ) {
	/**
	 * Register Customizer fields for section imagery.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer object.
	 */
	function nx_register_section_media_customizer( WP_Customize_Manager $wp_customize ) {
		$wp_customize->add_panel(
			'nx_sections_panel',
			[
				'title'       => __( 'NexRise Sections', 'nw-avada-like' ),
				'description' => __( 'Manage imagery used across the homepage sections.', 'nw-avada-like' ),
				'priority'    => 160,
			]
		);

		$wp_customize->add_section(
			'nx_sections_media',
			[
				'title' => __( 'Section Images', 'nw-avada-like' ),
				'panel' => 'nx_sections_panel',
			]
		);

		$fields = [
			'nx_img_portfolio_1'           => __( 'Portfolio item #1 image URL', 'nw-avada-like' ),
			'nx_img_portfolio_2'           => __( 'Portfolio item #2 image URL', 'nw-avada-like' ),
			'nx_img_portfolio_3'           => __( 'Portfolio item #3 image URL', 'nw-avada-like' ),
			'nx_img_portfolio_4'           => __( 'Portfolio item #4 image URL', 'nw-avada-like' ),
			'nx_img_process_visual'        => __( 'Process visual image URL', 'nw-avada-like' ),
			'nx_img_final_cta_mockup'      => __( 'Final CTA mockup image URL', 'nw-avada-like' ),
		];

		foreach ( $fields as $field_id => $label ) {
			$wp_customize->add_setting(
				$field_id,
				[
					'type'              => 'theme_mod',
					'sanitize_callback' => 'esc_url_raw',
				]
			);

			$wp_customize->add_control(
				$field_id,
				[
					'type'        => 'url',
					'section'     => 'nx_sections_media',
					'label'       => $label,
					'input_attrs' => [
						'placeholder' => __( 'https://example.com/image.jpg', 'nw-avada-like' ),
					],
				]
			);
		}
	}
}
add_action( 'customize_register', 'nx_register_section_media_customizer' );

if ( ! function_exists( 'nx_render_section_image' ) ) {
	/**
	 * Render section image or fallback placeholder.
	 *
	 * @param string $setting_id Theme mod ID.
	 * @param string $alt        Alt text.
	 * @param array  $args       Additional args: class, width, height, min_height.
	 */
	function nx_render_section_image( $setting_id, $alt, $args = [] ) {
		$defaults = [
			'class'      => '',
			'width'      => 1200,
			'height'     => 800,
			'min_height' => 320,
		];

		$args = wp_parse_args( $args, $defaults );

		$image_url = get_theme_mod( $setting_id );

		$class_attr = trim( (string) $args['class'] );
		$width      = (int) $args['width'];
		$height     = (int) $args['height'];
		$min_height = (int) $args['min_height'];

		if ( $image_url ) {
			printf(
				'<img class="%1$s" src="%2$s" alt="%3$s" loading="lazy" decoding="async" width="%4$d" height="%5$d" />',
				esc_attr( $class_attr ),
				esc_url( $image_url ),
				esc_attr( $alt ),
				$width,
				$height
			);
			return;
		}

		$placeholder_classes = trim( 'img-placeholder nx-img-placeholder ' . $class_attr );

		printf(
			'<div class="%1$s" aria-hidden="true" role="presentation" style="min-height:%2$dpx;"></div>',
			esc_attr( $placeholder_classes ),
			max( 280, $min_height )
		);
	}
}
