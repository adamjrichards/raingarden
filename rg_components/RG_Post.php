<?php

namespace raingarden\rg_components;

class RG_Post extends black_willow\bw_containers\BW_Section_Tag {

	public function __construct($the_params_map) {
		parent::__construct($the_params_map);
	}



	function retrieve_the_metadata_from_the_post( $search_for_this, $in_this_post  ) {
		$the_file = file( "rg_rg_assets/rg_rg_posts/$in_this_post" );
		foreach( $the_file as $this_line ) {
			$this_line_length = strlen( $search_for_this ) + 2;
			if( strpos( $this_line, $search_for_this ) !== FALSE ) {
				return trim( substr( $this_line, $this_line_length ) );
			}
		}
	}

	function retrieve_the_date_from_the_post_meta( $in_this_post ) {
		return retrieve_the_metadata_from_the_post( "Date", $in_this_post );
	}
	function retrieve_the_categories_from_the_post_meta( $in_this_post ) {
		return retrieve_the_metadata_from_the_post( "Categories", $in_this_post );
	}
	function retrieve_the_tags_from_the_post_meta( $in_this_post ) {
		return retrieve_the_metadata_from_the_post( "Tags", $in_this_post );
	}
	function retrieve_the_title_from_the_post_meta( $in_this_post ) {
		return retrieve_the_metadata_from_the_post( "Title", $in_this_post );
	}
	function retrieve_the_subsite_from_the_post_meta( $in_this_post ) {
		return retrieve_the_metadata_from_the_post( "Subsite", $in_this_post );
	}
	function retrieve_the_number_from_the_post_meta( $in_this_post ) {
		return retrieve_the_metadata_from_the_post( "Number", $in_this_post );
	}
	function retrieve_the_id_from_the_post_meta( $in_this_post ) {
		return retrieve_the_metadata_from_the_post( "ID", $in_this_post );
	}
	function retrieve_the_filename_from_the_post_meta( $in_this_post ) {
		return retrieve_the_metadata_from_the_post( "Filename", $in_this_post );
	}
	function push_the_metadata_and_posts( $put_the_key_in_this_array, $with_this_value ) {
		$put_the_key_in_this_array[ $the_key_we_need ] = $with_this_value;
	}


}