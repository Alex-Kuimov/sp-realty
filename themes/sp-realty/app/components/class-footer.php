<?php

namespace site;

use site\Component;

class Footer extends Component {

	/**
	 * Return footer menu html
	 *
	 * @return string
	 */
	public function get_menu(): string {

		$menu_name = 'menu-bottom';

		$locations = get_nav_menu_locations();
		$menu_list = array();

		if ( $locations && isset( $locations[ $menu_name ] ) ) {
			$menu       = wp_get_nav_menu_object( $locations[ $menu_name ] );
			$menu_items = wp_get_nav_menu_items( $menu );

			foreach ( $menu_items as $menu_item ) {

				$menu_list[ $menu_item->ID ]['id']         = $menu_item->ID;
				$menu_list[ $menu_item->ID ]['title']      = $menu_item->title;
				$menu_list[ $menu_item->ID ]['url']        = $menu_item->url;
				$menu_list[ $menu_item->ID ]['attr_title'] = $menu_item->attr_title;
				$menu_list[ $menu_item->ID ]['class']      = $menu_item->classes[0];
				$menu_list[ $menu_item->ID ]['parent']     = $menu_item->menu_item_parent;
			}
		}

		return $this->render( $menu_list );
	}

	/**
	 * Return footer copyright html
	 *
	 * @return string
	 */
	public function get_copyright(): string {
		return $this->render( false );
	}

	/**
	 * Return footer widget html
	 *
	 * @return string
	 */
	public function get_widget(): string {
		return $this->render( false );
	}

}
