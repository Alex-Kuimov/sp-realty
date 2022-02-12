<?php

namespace site\models;

class Menu {

	public static function get($name = null) {
		if ( ! $name ) {
			return false;
		}

		$locations = get_nav_menu_locations();
		$list      = array();

		if ( $locations && isset( $locations[ $name ] ) ) {
			$menu  = wp_get_nav_menu_object( $locations[ $name ] );
			$items = wp_get_nav_menu_items( $menu );

			foreach ( $items as $key => $item ) {
				$list[ $key ]['id']         = $item->ID;
				$list[ $key ]['title']      = $item->title;
				$list[ $key ]['url']        = $item->url;
				$list[ $key ]['attr_title'] = $item->attr_title;
				$list[ $key ]['class']      = $item->classes[0];
				$list[ $key ]['parent']     = $item->menu_item_parent;
			}
		}

		return $list;
	}

}
