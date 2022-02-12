<?php

namespace site;

class Part implements Template {

	public static function get( $arg = null ) {
		$controller = new Controller();
		return $controller->run( $arg );
	}

}
