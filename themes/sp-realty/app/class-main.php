<?php

namespace site;

class Main extends Singleton {

	private string $dir_models     = '/app/models/';
	private string $dir_interfaces = '/app/interfaces/';
	private string $dir_classes    = '/app/classes/';
	private string $dir_components = '/app/components/';

	private function load($dir) {

		if( ! is_dir(TEMP_DIR . $dir ) ) {
			return false;
		}

		$files = scandir( TEMP_DIR . $dir );

		if ( ! $files ) {
			return false;
		}

		foreach ( $files as $file ) {
			if ( $file === '.' || $file === '..' ){
				continue;
			}

			$component = TEMP_DIR . $dir . $file;

			if ( ! file_exists( $component ) ) {
				return false;
			}

			require $component;
		}
	}

	private function load_models() {
		$this->load( $this->load( $this->dir_models ) );
	}

	private function load_interfaces() {
		$this->load( $this->load( $this->dir_interfaces ) );
	}

	private function load_classes() {
		$this->load( $this->dir_classes );
	}

	private function load_components(){
		$this->load( $this->dir_components );
	}

	public function init() {
		$this->load_models();
		$this->load_interfaces();
		$this->load_classes();
		$this->load_components();
	}

}
