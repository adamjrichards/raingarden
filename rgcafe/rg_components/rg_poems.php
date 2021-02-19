<?php

/*

RGCafe Assets Default Metadata

File UID :
Content :
Site :
Series :
Title :
Tags :
HTML ID :
HTML ClassName :
Filepath :
Filename :
CDate :

*/


function retrieve_the_metadata_from_a_poem( $in_this_folder, $with_this_name  ) {
	$the_file = file( "$in_this_folder$with_this_name" );
	$the_metadata_array = [ "File UID" => "", "Content" => "", "Site" => "", "Series" => "", "Title" => "", "Tags" => "", "HTML ID" => "", "HTML Class" => "", "Filepath" => "",  "Filename" => "", "CDate" => "" ];
		
	foreach( array_keys( $the_metadata_array ) as $search_for_this ) {
		foreach( $the_file as $this_line ) {
			$this_line_length = strlen( $search_for_this ) + 2;		
			if( strpos( $this_line, $search_for_this ) !== FALSE ) {
				try {
					$the_metadata_array[ $search_for_this ] = trim( substr( $this_line, $this_line_length ) );
				} catch( Exception $e ) {
					continue;
				}
			}
		}
	}
}


function collect_the_metadata_for_a_poem( $with_these_attributes ) {
	
	$with_this_file_UID = $with_these_attributes[ 0 ];
	$in_this_subfolder = $with_these_attributes[ 1 ];
	$in_this_site = $with_these_attributes[ 2 ];
	$in_this_series = $with_these_attributes[ 3 ];
	$with_this_title = $with_these_attributes[ 4 ];
	$with_these_tags = $with_these_attributes[ 5 ];
	$with_this_HTML_ID = $with_these_attributes[ 6 ];
	$with_this_HTML_className = $with_these_attributes[ 7 ];
	$with_this_date = $with_these_attributes[ 8 ];
		
	$the_file = file( "/rg_assets/rg_poems/$in_this_subfolder$with_this_name" );
	$the_metadata_array = [ "File UID" => "", "Content" => "", "Site" => "", "Title" => "", "Series" => "", "Tags" => "", "ID" => "", "ClassName" => "", "Filepath" => "", "Filename" => "", "Date" => "" ]; 
		
	foreach( array_keys( $the_metadata_array ) as $search_for_this ) {
		foreach( $the_file as $this_line ) {
			$this_line_length = strlen( $search_for_this ) + 2;		
			if( strpos( $this_line, $search_for_this ) !== FALSE ) {
				try {
					switch( $search_for_this ) {
						case "File UID"			:	$the_metadata_array[ $search_for_this ] = "$with_this_file_ID"; break;
						case "Content"			:	$the_metadata_array[ $search_for_this ] = "Poem"; break;
						case "Site"				:	$the_metadata_array[ $search_for_this ] = "$in_this_site"; break;
						case "Series"			:	$the_metadata_array[ $search_for_this ] = "$in_this_series"; break;
						case "Title"			:	$the_metadata_array[ $search_for_this ] = "$with_this_title"; break;
						case "Tags"				:	$the_metadata_array[ $search_for_this ] = "$with_these_tags"; break;
						case "HTML ID"			:	$the_metadata_array[ $search_for_this ] = "$with_this_HTML_ID"; break;
						case "HTML ClassName"	:	$the_metadata_array[ $search_for_this ] = "$with_this_HTML_className"; break;
						case "Filepath"			:	$the_metadata_array[ $search_for_this ] = "/rg_assets/rg_poems/$in_this_subfolder"; break;
						case "Filename"			:	$the_metadata_array[ $search_for_this ] = "$with_this_name,"; break;
						case "Date"				:	$the_metadata_array[ $search_for_this ] = ""; break;
					}
				} catch( Exception $e ) {
					continue;
				}
			}
		}
	}	
}

function write_the_new_metadata_to_the_poem( $write_this, $to_this ) {
	if ( is_file( $to_this ) ) {		
		$the_file_size = file_put_contents( $to_this, $write_this );
	} else {
		die( "<h2>There ain't none o' that round here.</h2>" );
	}	
}

