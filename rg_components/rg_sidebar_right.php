<?php

namespace raingarden\rg_components;

$the_html = "##!--  sidebar_right.php begins here. -->

##aside class='rgcafe navigation sidebar right' id='the_rgcafe_right_sidebar'>

	##!--  The right-side navbar is a top-level component of the RGCafe environment.  It begins here.  -->

	##nav class='sidebar right' id='the_right-side_navbar'>

			##ul class='sidebar right nav-menu' id='the_right-side_nav-menu'>

				##li class='sidebar right nav-list-item'>
					##a class='sidebar right nav-link' id='the_meta_button' onclick='request_the_page( 'static_pages/the_meta.php', 'the_main_content_panel' )'>thE meTa...##/a>
				##/li>
				##li class='sidebar right nav-list-item'>
					##a class='sidebar right nav-link' id='the_about_me_button' onclick='request_the_page( 'static_pages/about_me.php', 'the_main_content_panel' )'>aB0uT me...##/a>
				##/li>
				##li class='sidebar right nav-list-item'>
					##a class='sidebar right nav-link' id='the_contact_me_button' onclick='request_the_page( 'static_pages/contact_me.php', 'the_main_content_panel' )'>conTaCT mE.. .##/a>
				##/li>
				##li class='sidebar right nav-list-item'>
					##a class='sidebar right nav-link' id='the_site_index_button' onclick='request_the_page( 'static_pages/site_index.php', 'the_main_content_panel' )'>Site iNdeX...##/a>
				##/li>

			##/ul>

		##/nav>
##/aside>
##!--  sidebar_right.php ends here.  -->";