<?php
/**
 * Sidebars configuration.
 *
 * @package Kava
 */

add_action( 'after_setup_theme', 'croco_register_sidebars', 6 );

function croco_register_sidebars() {

	kava_widget_area()->widgets_settings = apply_filters( 'kava-theme/widget_area/default_settings', array(
		'footer' => array(
			'name'            => esc_html__( 'Footer Area', 'kava' ),
			'description'     => '',
			'before_widget'   => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'    => '</aside>',
			'before_title'    => '<h6 class="widget-title h6-style-3">',
			'after_title'     => '</h6>',
			'before_wrapper'  => '<div id="%1$s-area" %2$s>',
			'after_wrapper'   => '</div>',
			'wrapper_classes' => 'container',
			'is_global'       => true,
		),
		'footer-widget-area-1' => array(
			'name'            => esc_html__( 'Footer Widget Area 1', 'kava' ),
			'description'     => '',
			'before_widget'   => '<aside id="%1$s" class="widget %2$s col-xs-5 col-sm-3 col-md-2 col-lg-2 col-xl-2">',
			'after_widget'    => '</aside>',
			'before_title'    => '<h6 class="widget-title h6-style-3">',
			'after_title'     => '</h6>',
			'before_wrapper'  => '',
			'after_wrapper'   => '',
			'wrapper_classes' => 'container',
			'is_global'       => true,
		),
		'footer-widget-area-2' => array(
			'name'            => esc_html__( 'Footer Widget Area 2', 'kava' ),
			'description'     => '',
			'before_widget'   => '<aside id="%1$s" class="widget %2$s col-xs-6 col-sm-3 col-md-2 col-lg-2 col-xl-2">',
			'after_widget'    => '</aside>',
			'before_title'    => '<h6 class="widget-title h6-style-3">',
			'after_title'     => '</h6>',
			'before_wrapper'  => '',
			'after_wrapper'   => '',
			'wrapper_classes' => 'container',
			'is_global'       => true,
		),
		'footer-widget-area-3' => array(
			'name'            => esc_html__( 'Footer Widget Area 3', 'kava' ),
			'description'     => '',
			'before_widget'   => '<aside id="%1$s" class="widget %2$s col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">',
			'after_widget'    => '</aside>',
			'before_title'    => '<h6 class="widget-title h6-style-3">',
			'after_title'     => '</h6>',
			'before_wrapper'  => '',
			'after_wrapper'   => '',
			'wrapper_classes' => 'container',
			'is_global'       => true,
		),
		'footer-widget-area-4' => array(
			'name'            => esc_html__( 'Footer Widget Area 4', 'kava' ),
			'description'     => '',
			'before_widget'   => '<aside id="%1$s" class="widget %2$s col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">',
			'after_widget'    => '</aside>',
			'before_title'    => '<h6 class="widget-title h6-style-3">',
			'after_title'     => '</h6>',
			'before_wrapper'  => '',
			'after_wrapper'   => '',
			'wrapper_classes' => 'container',
			'is_global'       => true,
		)
	) );
}
