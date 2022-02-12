<?php
namespace site;

class Factory {

	public static function create ( $class, $method ){
		if ( ! $class || ! $method ) {
			return false;
		}

		if ( ! class_exists( $class ) ) {
			return false;
		}

		if ( ! method_exists( $class, $method ) ) {
			return false;
		}

		$component = new $class();

		$component->set_class( $class );
		$component->set_method( $method );

		return $component->$method();
	}

}