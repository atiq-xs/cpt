<?php

namespace XS\CPT;

defined('ABSPATH') || exit;

/**
 * Cpt Abstract Class.
 * Cpt Abstract class for custom post type of Builders.
 *
 * @since 1.0.0
 */
abstract class Cpt {

	abstract public function post_type();

	abstract public function get_name();


	/**
	 * __construct function
	 * @since 1.0.0
	 */
	public function __construct() {

		$name = $this->get_name();
		$args = $this->post_type();

		// register custom post type
		add_action('init', function() use ($name, $args) {
			register_post_type($name, $args);
		});
	}
}

 