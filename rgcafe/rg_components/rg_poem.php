<?php


function retrieve_the_metadata_from_a_poem( $in_this_folder, $with_this_name  ) {
	$the_file = file( "rg_rg_assets/rg_rg_poems/$in_this_folder/$with_this_name" );
	$the_metadata_array = [ "File UID" => "", "Content" => "", "Site" => "", "Series" => "", "Title" => "", "Tags" => "", "HTML ID" => "", "HTML ClassName" => "", "Folder" => "",  "Filename" => "", "CDate" => "" ];

	foreach( array_keys( $the_metadata_array ) as $search_for_this ) {
		foreach( $the_file as $this_line ) {
			$this_line_length = strlen( $search_for_this ) + 2;
			if( strpos( $this_line, $search_for_this ) !== FALSE ) {
				try {
					$the_metadata_array[ $search_for_this ] = trim( substr( $this_line, $this_line_length ) );
					cl( $the_metadata_array[$search_for_this]);
				} catch( Exception $e ) {
					continue;
				}
			}
		}
	}
}

function write_the_metadata_to_a_poem( $the_file_id, $the_attributes ) {
	$the_location = "rg_rg_assets/rg_rg_poems/$the_attributes[4]/$the_attributes[5]";

	$the_file = file_get_contents( $the_location );
	$the_metadata = [ "Site" => $the_attributes[0], "Series" => $the_attributes[1], "Title" => $the_attributes[2], "Tags" => $the_attributes[3], "Folder" => $the_attributes[4], "Filename" => $the_attributes[5], "CDate" => $the_attributes[6] ];

	if( ! $the_metadata[ "CDate" ] ) {
		$the_metadata[ "CDate" ] = filectime( $the_location );
	}

	$the_metadata_string = "

RGCafe Assets Default Metadata

 $the_file_UID

Site: " . $the_metadata[ "Site" ] . "
Series: " . $the_metadata["Series"]
		   . $the_metadata[ "Title" ] . "
Tags: " . $the_metadata[ "Tags" ] . "
". strtolower( $the_metadata[ "Title" ] ). "
HTML ClassName: " . $the_metadata[ "Site" ] . " poem
" . $the_metadata[ "Folder" ] . "
Filename: " . $the_metadata[ "Filename" ]  . "
CDate: " . $the_metadata[ "CDate" ] . "


";

	$the_file = $the_metadata_string . $the_file;
	echo $the_file;
	file_put_contents( $the_location, $the_file );
}

function strip_old_metadata_from_each_file_in_an_index( $the_index ) {
	foreach( $the_index as $the_indexed_file ) {
		say($the_indexed_file);
		$the_file_contents = file_get_contents( $the_indexed_file );
		if( strrpos( $the_file_contents, "--- >" ) > strrpos( $the_file_contents, "--->" ) ){
			$start_here = strrpos( $the_file_contents, "--- >" );
			$the_file_contents = substr( $the_file_contents, $start_here + 5 );
		} else {
			$start_here = strrpos( $the_file_contents, "--->" );
			$the_file_contents = substr( $the_file_contents, $start_here + 4 );
		}
		file_put_contents( $the_indexed_file, $the_file_contents );
	}
}

function write_the_default_metadata_to_each_indexed_poem( $the_index ){
	foreach( $the_index as $the_indexed_file ) {
		$the_seed = date_create();
		$the_file_UID = date_timestamp_get( $the_seed );
		$the_CDate_default = filectime( $the_indexed_file );

		$the_metadata_string = "

RGCafe asset metadata

 $the_file_UID





$the_file_UID


Filename: $the_indexed_file
CDate: $the_CDate_default


";
		file_put_contents( $the_indexed_file, $the_metadata_string . file_get_contents( $the_indexed_file ) );
	}
}

function normalize_the_default_metadata_in_all_the_indexed_files( $in_this_index ){
	strip_old_metadata_from_each_file_in_an_index( $in_this_index );
	write_the_default_metadata_to_each_indexed_poem( $in_this_index );
}

function get_the_full_poem_index() {
	return index_a_directory_recursively( $_SESSION[ "root_folders" ][ "poems" ] );
}

function find_a_poems_folder_from_the_initial( $of_this_poem ) {
	$the_ordinal = ord( strtolower( $of_this_poem ) );
	if( $the_ordinal >= 97 ) {
		if( $the_ordinal <= 102 ) {
			return "a_to_f";
		} else if( $the_ordinal <= 109 ) {
			return "g_to_m";
		} else if( $the_ordinal <= 115 ) {
			return "n_to_s";
		} else if( $the_ordinal <= 122 ) {
			return "t_to_other";
		}
	} else {
		return "t_to_other";
	}
}

function add_the_navigation_tools_to_the_item( $using_this_id ) {
	$the_html_code = "<nav class='global navigation' id='$using_this_id\_nav_box'>
						<menu class='global navigation' id='$using_this_id\_nav_menu'>
							<ul class='global navigation' id='$using_this_id\_nav_list'>
								<li class='global navigation' id='$using_this_id\_nav_closer'>
									<img class='global navigation' id='the_$using_this_id\ss_icon' src='rg_assets/rg_images/icons/close_me.svg' />
								</li>
								<li class='global navigation' id='$using_this_id\_nav_minimizer'>
									<img class='global navigation' id='the_$using_this_id\_icon' src='rg_assets/rg_images/icons/minimize_me.svg' />
								</li>
								<li class='global navigation' id='$using_this_id\_nav_maximizer'>
									<img class='global navigation' id='the_$using_this_id\_icon' src='rg_assets/rg_images/icons/maximize_me.svg' />
								</li>
								<li class='global navigation' id='$using_this_id\_nav_resizer'>
									<img class='global navigation' id='the_$using_this_id\_icon' src='rg_assets/rg_images/icons/resize_me.svg' />
								</li>
								<li class='global navigation' id='$using_this_id\_nav_dragger'>
									<img class='global navigation' id='the_$using_this_id\_icon' src='rg_assets/rg_images/icons/drag_me.svg' />
								</li>
								<li class='global navigation' id='$using_this_id\_nav_pin'>
									<img class='global navigation' id='the_$using_this_id\_icon' src='rg_assets/rg_images/icons/pin_me.svg' />
								</li>
							</ul>
						</menu>
					</nav>";
}

function add_ids_to_the_html_if_theyre_missing( $in_this_poem, $using_this_seed = "" ) {
	$all_the_poems_lines = file( $in_this_poem );
	$the_line_count = 1;
	foreach( $all_the_poems_lines as $this_here_line ) {
		if ( strpos( $this_here_line, "HTML ID: " !== FALSE ) ) {
			$the_html_id = trim( substr( $this_here_line, 9 ) ) . $the_line_count++;
			break;
		}
	}
	foreach( $all_the_poems_lines as $this_here_line ) {
		if( strpos( $this_here_line, "\s<" ) !== FALSE ) {
			if( strpos( $this_here_line, "id=\w" ) === FALSE ) {
				if( $using_this_seed !== "" ) {
					$the_html_id = $using_this_seed . "_line_" . $the_line_count;
				} else {
					$the_html_id = "the_poem_" . rtrim( $in_this_poem, ".php" ) . "_line_" . $the_line_count++;
				}
				$this_here_line = strstr( $this_here_line, ">", TRUE ) . " id='$the_html_id'>";
			}
		}
	}
}