<?php

namespace site;

class Controller {

	private array $names;

	private function set_names( $arg ) {
		$this->names = explode('_', $arg );
	}

	private function get_class( $names ) {
		return isset( $names[0] ) ? __NAMESPACE__ . '\\' . ucfirst( $names[0] ) : false;
	}

	private function get_method( $names ) {
		return isset( $names[1] ) ? 'get_' . $names[1] : false;
	}

	public function run( $arg ){
		if ( ! $arg ) {
			return false;
		}

		$this->set_names( $arg );

		$class  = $this->get_class( $this->names );
		$method = $this->get_method( $this->names );

		return Factory::create( $class, $method );
	}
}
