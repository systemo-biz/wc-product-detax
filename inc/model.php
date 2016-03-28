<?php


add_action( 'init', 'wc_service_tax_register' );
function wc_service_tax_register() {
	$labels = array(
		"name" => __( 'Компоненты', '' ),
		"singular_name" => __( 'Компонент', '' ),
		);

	$args = array(
		"label" => __( 'Компоненты', '' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Компоненты",
		"show_ui" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'components', 'with_front' => true ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "components", array( "product" ), $args );

	$labels = array(
		"name" => __( 'Работы', '' ),
		"singular_name" => __( 'Работа', '' ),
		);

	$args = array(
		"label" => __( 'Работы', '' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Работы",
		"show_ui" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'job', 'with_front' => true ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "job", array( "product" ), $args );

	$labels = array(
		"name" => __( 'Назначение', '' ),
		"singular_name" => __( 'Назначение', '' ),
		);

	$args = array(
		"label" => __( 'Назначение', '' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Возможности",
		"show_ui" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'purpose', 'with_front' => true ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "purpose", array( "product" ), $args );

// End cptui_register_my_taxes()
}
