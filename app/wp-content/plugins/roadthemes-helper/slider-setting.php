<?php 

if( ! function_exists( 'road_get_slider_setting' ) ) {
	function road_get_slider_setting() {
		return array(
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Style', 'moller' ),
				'param_name'  => 'style',
				'value'       => array(
					__( 'Grid view', 'moller' )                    => 'product-grid',
					__( 'List view', 'moller' )                    => 'product-list',
					__( 'Grid view (countdown) ', 'moller' )     => 'product-grid-countdown',
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => __( 'Enable slider', 'moller' ),
				'description' => __( 'If slider is enabled, the "column" ins General group is the number of rows ', 'moller' ),
				'param_name'  => 'enable_slider',
				'value'       => true,
				'save_always' => true, 
				'group'       => __( 'Slider Options', 'moller' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: over 1500px)', 'moller' ),
				'param_name' => 'items_1500up',
				'group'      => __( 'Slider Options', 'moller' ),
				'value'      => esc_html__( '4', 'moller' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: 1200px - 1499px)', 'moller' ),
				'param_name' => 'items_1200_1499',
				'group'      => __( 'Slider Options', 'moller' ),
				'value'      => esc_html__( '4', 'moller' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: 992px - 1199px)', 'moller' ),
				'param_name' => 'items_992_1199',
				'group'      => __( 'Slider Options', 'moller' ),
				'value'      => esc_html__( '4', 'moller' ),
			), 
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: 768px - 991px)', 'moller' ),
				'param_name' => 'items_768_991',
				'group'      => __( 'Slider Options', 'moller' ),
				'value'      => esc_html__( '3', 'moller' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: 640px - 767px)', 'moller' ),
				'param_name' => 'items_640_767',
				'group'      => __( 'Slider Options', 'moller' ),
				'value'      => esc_html__( '2', 'moller' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: 375px - 639px)', 'moller' ),
				'param_name' => 'items_375_639',
				'group'      => __( 'Slider Options', 'moller' ),
				'value'      => esc_html__( '2', 'moller' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: under 374px)', 'moller' ),
				'param_name' => 'items_0_374',
				'group'      => __( 'Slider Options', 'moller' ),
				'value'      => esc_html__( '1', 'moller' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Navigation', 'moller' ),
				'param_name'  => 'navigation',
				'save_always' => true,
				'group'       => __( 'Slider Options', 'moller' ),
				'value'       => array(
					__( 'No', 'moller' )  => false,
					__( 'Yes', 'moller' ) => true,
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Pagination', 'moller' ),
				'param_name'  => 'pagination',
				'save_always' => true,
				'group'       => __( 'Slider Options', 'moller' ),
				'value'       => array(
					__( 'No', 'moller' )  => false,
					__( 'Yes', 'moller' ) => true,
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Item Margin (unit: pixel)', 'moller' ),
				'param_name'  => 'item_margin',
				'value'       => 30,
				'save_always' => true,
				'group'       => __( 'Slider Options', 'moller' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Slider speed number (unit: second)', 'moller' ),
				'param_name'  => 'speed',
				'value'       => '500',
				'save_always' => true,
				'group'       => __( 'Slider Options', 'moller' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => __( 'Slider loop', 'moller' ),
				'param_name'  => 'loop',
				'value'       => true,
				'group'       => __( 'Slider Options', 'moller' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => __( 'Slider Auto', 'moller' ),
				'param_name'  => 'auto',
				'value'       => true,
				'group'       => __( 'Slider Options', 'moller' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Navigation Style', 'moller' ),
				'param_name'  => 'navigation_style',
				'value'       => array(
					__( 'Style 1', 'moller' ) => 'nav-style',
				),
				'group'       => __( 'Slider Options', 'moller' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => __( 'Other position navigation container', 'moller' ),
				'param_name'  => 'navcontainer',
				'value'       => false,
				'group'       => __( 'Slider Options', 'moller' ),
			),
		);
	}
}