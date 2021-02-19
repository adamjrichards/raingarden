<?php

namespace raingarden\rg_black_boxes\rg_banner;

class RG_Banner extends \black_willow\bw_nodes\BW_Black_Box {

	function __construct( $the_params_map ){
		parent::__construct( $the_params_map );
		$the_banner_url = \raingarden\rg_factories\rg_Random_Objects::get_me_a_random_banner_image( 'rg_x1920y150' );

          $this->my_node_opener = $this->get_my_node_opener() . "\n
			##!------------------------------ RG_Banner.php starts here. ---------------------------------->\n
			##{$this->get_my_tagName()} class='{$this->get_my_className()}' id='{$this->get_my_id()}' name='{$this->get_my_name()}' {$this->get_my_other_attributes()}>\n
			##link href='rg_black_boxes/rg_banner/rg_banner.css' type='text/css' rel='stylesheet' title='rg_banner_init'>";

		$this->my_innerHTML .= "##div class='rgcafe banner' id='the_banner_wrapper'>
				##img class='rgcafe banner' id='the_banner_image' src='$the_banner_url' />";
		$this->my_node_closer = "\n##/div>\n" . $this->get_my_node_closer();
	}

	public function get_my_baseID() {
		return $this->my_baseID;
	}
	public function get_my_target_URL() {
		return $this->my_target_URL;
	}
	public function get_my_html() {
		return $this->my_html;
	}
}