<?php

namespace raingarden\rg_factories;
use \black_willow\bw_static_pages as bstat;

abstract class rg_Static_Pages {

	/*public static function get_me_a_new_rg_( $with_this_handle, $with_this_value ) {
          $GLOBALS[ $with_this_handle ] = new bstat\BW_( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}*/

	public static function get_me_a_new_BW_Smallprint( $with_this_handle, $with_this_value ) {
          $GLOBALS[ $with_this_handle ] = new bstat\BW_Smallprint( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}

	public static function get_me_a_new_BW_Meta( $with_this_handle, $with_this_value ) {
          $GLOBALS[ $with_this_handle ] = new bstat\BW_Meta( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}

	public static function get_me_a_new_BW_About_Me( $with_this_handle, $with_this_value ) {
		$GLOBALS[ $with_this_handle ] = new bstat\BW_About_Me( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}

	public static function get_me_a_new_BW_Contact_Me( $with_this_handle, $with_this_value ) {
		//\line_out( __FILE__, __LINE__, $with_this_value );
		$GLOBALS[ $with_this_handle ] = new bstat\BW_Contact_Me( $with_this_value );
		return $GLOBALS[ $with_this_handle ];
	}

	public static function get_me_a_new_BW_Generic_Static_Page( $with_this_handle, $with_this_value ) {
//\line_out( __FILE__, __LINE__, $with_this_handle );
		$GLOBALS[ $with_this_handle ] = new bstat\BW_Generic_Static_Page( $with_this_value );
		//\line_out( __FILE__, __LINE__, $GLOBALS[ $with_this_handle ]->get_my_innerHTML() );
		return $GLOBALS[ $with_this_handle ];
	}
}