<?php

	class Logo_RGCafe {
			
		private $my_type;
		private $my_target_URL;
		private $my_cafe;
		private $my_ferns = [];
		private $my_raingarden;
		public $my_html;
		
		function __construct( $the_type = "launch", $the_next_type = "wide", $the_target_URL = "/#" ){
					
			
			// The constructor runs in C:/Raingarden.
			go_home();
			
			include( "components/logo/Logo_Fern.php" );
			include( "components/logo/Logo_Cafe.php" );
			include( "components/logo/Logo_Raingarden.php" );
			$this->my_type = $the_type;
			$this->my_next_type = $the_next_type;
			$this->my_target_URL = $the_target_URL;
			$my_script_tag = "
					##script type='module' src='components/logo/Logo_RGCafe.js'>##/script>
					##script>//change_the_logo_style_to( '$this->my_next_type' );##/script>\n";
			$this->my_html = "
			##!-- The RGCafe logo floats in front of all of the major sections. It begins here. -->\n
			##a class='logo link' id='the_logo_link' name='logo' href='$this->my_target_URL' onmouseover='add_my_listeners( this )'>
				
				##!-- Links relative to the root context.  -->						
				##div class='logo RGCafe wrapper $this->my_type' id='the_logo_wrapper'>\n";

				$this->my_ferns[ 1 ] = new Logo_Fern( $this->my_type, "the_blue_fern", "", "$this->my_target_URL" );	
				$this->my_ferns[ 2 ] = new Logo_Fern( $this->my_type, "the_green_fern", "", "$this->my_target_URL" );	
				$this->my_cafe = new Logo_Cafe( $this->my_type, "the_cafe", "", "$this->my_target_URL" );
				$this->my_raingarden = new Logo_Raingarden( $this->my_type, "the_raingarden", "$this->my_target_URL" );

				$this->my_html .= $this->my_ferns[1] -> get_my_html() . "\n";
				$this->my_html .= $this->my_ferns[2] -> get_my_html() . "\n";
				$this->my_html .= $this->my_cafe -> get_my_html() . "\n";
				$this->my_html .= $this->my_raingarden -> get_my_html() . "\n";

				$this->my_html .= "\n##/div> ##!-- /#the_logo_wrapper -->\n##/a>\n
				
					$my_script_tag
			
				##!-- The RGCafe logo ends here. -->\n"; 
		
		} // __constructor

		// Class getters
		
		public function get_my_type() {
			return $this->my_type;
		}
		public function get_my_target_URL() {
			return $this->my_target_URL;
		}
		public function get_my_html() {
			return $this->my_html;
		}
		
	} // class Raingarden_Logo
