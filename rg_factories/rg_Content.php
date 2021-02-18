<?php

namespace raingarden\rg_factories;
use black_willow\bw_toolbox\bw_Indexifier as index;
use black_willow\bw_toolbox\bw_File_Info as finfo;
use black_willow\bw_toolbox\bw_Randomizer as rands;

abstract class rg_Content {

	public static function get_me_the_poem_called( $by_this_title, $in_this_format = "make it static" ) {
		$the_title = \preg_replace( "/\W?\s/", "_", $by_this_title );
		if ( $the_title < "A" ) {
			$the_directory = MY_PROJECT_ROOT . $GLOBALS[ "MY_CONTENT_TYPES" ][ "Poem T to Other" ];
		} else if ( $the_title < "G" ) {
			$the_directory = MY_PROJECT_ROOT . $GLOBALS[ "MY_CONTENT_TYPES" ][ "Poem A to F" ];
		} else if ( $the_title < "N" ) {
			$the_directory = MY_PROJECT_ROOT . $GLOBALS[ "MY_CONTENT_TYPES" ][ "Poem G to M" ];
		} else if ( $the_title < "T" ) {
			$the_directory = MY_PROJECT_ROOT . $GLOBALS[ "MY_CONTENT_TYPES" ][ "Poem N to S" ];
		} else {
			$the_directory = MY_PROJECT_ROOT . $GLOBALS[ "MY_CONTENT_TYPES" ][ "Poem T to Other" ];
		}
		if ( \is_dir( $the_directory ) ) {
			$the_index = index::index_a_directory_recursively( $the_directory );
		}
		$the_random_id = random_int( 500, 999 );
		$the_html_id = "the_poem_wrapper_$the_random_id";
		foreach( $the_index as $the_item ) {
			$the_file_array = file( $the_item );
			$the_file_string = file_get_contents( $the_item );
			foreach( $the_file_array as $this_line  ){
				if( strpos( $this_line, "HTML ID: " ) !== FALSE ) {
					$the_html_id = trim( substr( $this_line, 9 ) );
				}
				if (strpos($this_line, "Title: ") !== FALSE) {
				$the_title = trim( substr( $this_line, 7 ) );
					if( $the_title === $by_this_title ){
						switch( $in_this_format ) {
							case "make it static" : $the_contents_string = "<section class='pickup_lines poem static' id='$the_html_id'>";
							break;
							case "make it draggable"	: $the_contents_string = "<section class='pickup_lines poem non-draggable' id='$the_html_id' draggable='true' onmouseenter='there_is_only_one_draggable_element_at_a_time( this )'>"; break;
							case "make it float" : $the_contents_string = "<section class='pickup_lines poem fixed' id='$the_html_id' draggable='true' onmouseenter='there_is_only_one_floating_element_at_a_time( this )'>";
							break;
					}
						$the_contents_string .= file_get_contents( $the_item );
						return $the_contents_string .= "</section>";
					}
				}
			}
			//add_ids_to_the_html_if_theyre_missing( $the_item, $the_html_id );
		}
		return FALSE;
	}

	public static function show_me_the_poem_called( $by_this_title, $in_this_format = 'make it static' ) {
		echo self::get_me_the_poem_called( $by_this_title, $in_this_format );
	}
}