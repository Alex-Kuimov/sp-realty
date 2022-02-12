<?php

namespace site;

class Component {

	private string $dir = '/app/templates/';

	private string $method;
	private string $class;

	public function set_method( $method ){

		if ( ! $method ) {
			return false;
		}

		$this->method = $method;
	}

	public function set_class( $class ){

		if ( ! $class ) {
			return false;
		}

		$this->class = $class;
	}

	private function get_method(){
		return $this->method ?? false;
	}

	private function get_class(){
		return $this->class ?? false;
	}

	private function get_template() {
		if( ! $this->get_class() || ! $this->get_method() ) {
			return false;
		}

		$_class  = mb_strtolower( str_replace( __NAMESPACE__ . '\\', '', $this->get_class() ) );
		$_method = str_replace('get_', '', $this->get_method() );
		$name    = $_class . '-' . $_method . '.php';

		return TEMP_DIR . $this->dir . $name;
	}

	public function render( $args = null ){

		if ( ! file_exists( $this->get_template() ) ) {
			return false;
		}

		ob_start();
		include $this->get_template();
		return ob_get_clean();
	}

}
