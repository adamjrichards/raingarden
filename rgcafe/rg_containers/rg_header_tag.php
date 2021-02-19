<?php

namespace raingarden\rg_containers;
use raingarden\rg_factories\rg_Random_Objects as rands;

$the_time = \time();
$the_menu = "rg_components/rg_archives_menu.php";
$the_code = \file_get_contents( $the_menu );
$the_html = "
##!----------------------- rg_header_tag.php starts here -------------------------->
	##nav class='header menu archives' id='the_header_navbar'>
		$the_code
	##/nav>
##!------------------- rg_header_tag.php ends here ------------------->";