<?php

namespace raingarden\rg_factories;

abstract class rg_Black_Boxes {

	public static function get_me_a_new_rg_logo( $with_this_handle, $with_this_value ) {
		$GLOBALS[ $with_this_handle ] = new \raingarden\rg_black_boxes\rg_logo\RG_Logo( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}
	public static function get_me_a_new_rg_banner( $with_this_handle, $with_this_value ) {
          $GLOBALS[ $with_this_handle ] = new \raingarden\rg_black_boxes\rg_banner\RG_Banner( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}

	public static function get_me_a_new_rg_splash( $with_this_handle, $with_this_value ) {
          $GLOBALS[ $with_this_handle ] = new rbox\rg_splash\RG_Splash( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}


	public static function get_me_a_new_rg_hub( $with_this_handle, $with_this_value ) {
          $GLOBALS[ $with_this_handle ] = new rbox\rg_hub\RG_Hub( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}
}