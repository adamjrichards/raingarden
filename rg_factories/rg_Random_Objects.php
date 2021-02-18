<?php

namespace raingarden\rg_factories;
use raingarden\rg_factories\rg_Random_Objects as rands;
use black_willow\bw_toolbox\bw_Getters as get_me;
use black_willow\bw_toolbox\bw_File_Info as finfo;
use black_willow\bw_toolbox\bw_Randomizer as randoms;

abstract class rg_Random_Objects {

	public static function get_me_a_random_object( $of_this_type ) {
		$the_folder_uri = get_me::get_the_filepath_for_the_asset_type($of_this_type);
		if ( finfo::there_is_a_folder_called( $the_folder_uri ) ) {
			$all_the_nodes_in_the_folder = scandir( $the_folder_uri);
			foreach( $all_the_nodes_in_the_folder as $this_particular_node ) {
				$this_particular_node_now = "$the_folder_uri$this_particular_node";
				if( finfo::there_is_a_file_called( $this_particular_node_now ) ) {
					$all_the_nodes_in_the_folder[] = $this_particular_node_now;
				}
			}
			$how_many_items_are_in_the_folder = count( $all_the_nodes_in_the_folder );
			$a_random_number = randoms::get_me_a_random_integer_between( 0, $how_many_items_are_in_the_folder - 1 );
			$that_file = $all_the_nodes_in_the_folder[ $a_random_number ];
			$return_me = "$the_folder_uri/$that_file";
			return $return_me;
		} else {
			die( "There are no objects of type $of_this_type in folder $the_folder_uri." );
		}
	}
	public static function find_me_a_random_background_image( $of_this_size = "x1920y1080" ) {
		return rands::get_me_a_random_object( "Background $of_this_size" );
	}
	public static function get_me_a_random_background_image( $of_this_size = "x1920y1080" ) {
		$return_me = rands::get_me_a_random_object( "Background $of_this_size" );
		return $return_me;
	}
	public static function show_me_a_random_background_image( $of_this_size = "x1920y1080" ) {
		$return_me = rands::get_me_a_random_object( "Background $of_this_size" );
		echo $return_me;
		return $return_me;
	}
	public static function show_me_a_random_project() {
		$return_me = rands::get_me_a_random_object( "Project" );
		echo $return_me;
		return $return_me;
	}

	public static function get_me_a_random_banner_image( $of_this_size = "x1920y150" ) { // insert a src attribute
		$return_me = rands::get_me_a_random_object( "Banner $of_this_size" );
		return $return_me;
	}

	public static function show_me_a_random_banner_image( $of_this_size = "x1920y150" ) { // insert a src attribute
		$return_me = MY_PROJECT_ASSETS . "rg_banners/rg_$of_this_size/" . rands::get_me_a_random_object( "Banner $of_this_size" );
		echo $return_me;
		return $return_me;
	}

	public static function show_me_a_random_poem() {
		$return_me;
		switch( random_int( 1, 4 ) ) {
			case 1: $return_me = "rg_poems/rg_a_to_f/" . rands::get_me_a_random_object( "Poem A to F" ); break;
			case 2: $return_me = "rg_poems/rg_g_to_m/" . rands::get_me_a_random_object( "Poem G to M" ); break;
			case 3: $return_me = "rg_poems/rg_n_to_s/" . rands::get_me_a_random_object( "Poem N to S" ); break;
			case 4: $return_me = "rg_poems/rg_t_to_other/" . rands::get_me_a_random_object( "Poem T to Other" ); break;
		}
		if ( \is_file( MY_PROJECT_CONTENT . $return_me ) ) {
			echo file_get_contents( MY_PROJECT_CONTENT . $return_me );
			return $return_me;
		}
		return FALSE;
	}

	public static function show_me_a_random_poem_background( $with_this_orientation ) { // insert a style attribute
		echo rands::get_me_a_random_object( "Poem background", $with_this_orientation );
	}
}