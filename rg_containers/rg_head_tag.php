<?php

namespace raingarden\rg_containers;

$the_background_image = \raingarden\rg_factories\rg_Random_Objects::get_me_a_random_background_image();

$the_html = "
	##!---------------- rg_head_tag.php starts here. ----------------------->

	##title>" . MY_PROJECT_FRIENDLY_NAME . "##/title>
		##!-- Tag groups start here. -->
		TAG_GROUPS_PLACEHOLDER
		##!-- Tag groups end here. -->
	##script type='text/javascript'>
		function add_my_listeners( me ) {
			var the_stack = new Mouse_Listener_Stack( me );
			var the_transfer_element = me.id + '_transfer_element';
			var the_JSON = document.getElementById( the_transfer_element.innerHTML );
			console.log( document.getElementById( the_transfer_element ) );
		}
		on_body_load = function() {};
		on_body_unload = function() {};
	##/script>

	##style>
		body {
			background:   url( $the_background_image );
		}
	##/style>

##!---------------- rg_head_tag.php ends here. ----------------------->";
