<?php

namespace raingarden\rg_containers;
use raingarden\rg_factories as facs;
use raingarden\rg_factories\rg_Random_Objects as rands;

$the_html = "
##!--------------------- main.php starts here. ----------------------->

	##!------- The main content panel starts here. -------->

		##section class='content' id='the_main_content_panel'>	##!-- ...and this is the visible, drag-capable, scrollable content panel.  -->"
		//	. facs\rg_Content::show_me_the_poem_called( 'Black, in a field of snow', 'make it draggable' )
			// . retrieve_the_metadata_from_a_poem( 't_to_other', 'taste.php'  )
			//. facs\rg_Content::show_me_the_poem_called( 'Welcome to my Web' )
               //. rands::show_me_a_random_poem()
               . "##/section>
		##iframe class='content' id='the_main_content_iframe' name='the_main_content_iframe'>##/iframe>

	##!------- The main content panel ends here. ---------->

##!--------------------- main.php starts here. ----------------------->";