<?php
namespace site;

class Singleton {

	/**
	 * Call this method to get singleton
	 */
	public static function instance() {
		static $instance = false;
		if ( $instance === false ) {
			// Late static binding (PHP 5.3+)
			$instance = new static();
		}
		return $instance;
	}
	/**
	 * Make constructor private, so nobody can call "new Class".
	 */
	private function __construct() {}
	/**
	 * Make clone magic method private, so nobody can clone instance.
	 */
	private function __clone() {}

}
