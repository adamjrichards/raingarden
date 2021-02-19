<?php

namespace raingarden\rg_factories;
use \black_willow\bw_components as bcoms;

abstract class rg_Components {

	public static function get_me_a_new_rg_menu(  $with_this_handle, $with_this_value ) {
          $GLOBALS[ $with_this_handle ] = new bcoms\bw_menus\BW_Menu( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}

	public static function get_me_a_new_rg_image_set( $with_this_handle, $with_this_value ) {
          $GLOBALS[ $with_this_handle ] = new bcoms\BW_Image_Set( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}

	public static function get_me_a_new_BW_Sidebar( $with_this_handle, $with_this_value ) {
          $GLOBALS[ $with_this_handle ] = new bcoms\BW_Sidebar( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}
	public static function get_me_a_new_BW_Ornament( $with_this_handle, $with_this_value ) {
          $GLOBALS[ $with_this_handle ] = new bcoms\BW_Ornament( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}
}