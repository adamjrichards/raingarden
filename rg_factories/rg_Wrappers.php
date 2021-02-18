<?php

namespace raingarden\rg_factories;

abstract class bw_Wrappers {

     public static function get_me_a_new_image_tag( $the_params_map = null ) {
          return new \bw\wraps\BW_Image_Tag( $the_params_map );
     }
     public static function get_me_a_new_object_tag( $the_params_map = null ) {
          return new \bw\wraps\BW_Object_Tag( $the_params_map );
     }
     public static function get_me_a_new_figure_tag( $the_params_map = null ) {
          return new \bw\wraps\BW_Figure_Tag( $the_params_map );
     }
     public static function get_me_a_new_picture_tag( $the_params_map = null ) {
          return new \bw\wraps\BW_Picture_Tag( $the_params_map );
     }
     public static function get_me_a_new_script_tag( $the_params_map = null ) {
          return new \bw\wraps\BW_Script_Tag( $the_params_map );
     }
     public static function get_me_a_new_link_tag( $the_params_map = null ) {
          return new \bw\wraps\BW_Link_Tag( $the_params_map );
     }
}