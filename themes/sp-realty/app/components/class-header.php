<?php

namespace site;

use site\Component;
use site\models\Menu;

class Header extends Component {

	/**
	 * Return header menu html
	 *
	 * @return string
	 */
	public function get_menu(): string {
		return $this->render( false );
	}

	/**
	 * Return header logo html
	 *
	 * @return string
	 */
	public function get_logo(): string {
		$logo_id    = get_theme_mod( 'custom_logo' );
		$logo_array = wp_get_attachment_image_src( $logo_id, 'full' );
		$logo_src   = $logo_array[0] ?? false;

		return $this->render( $logo_src );
	}

	/**
	 * Return header widget html
	 *
	 * @return string
	 */
	public function get_widget(): string {
		return $this->render( false );
	}

}
