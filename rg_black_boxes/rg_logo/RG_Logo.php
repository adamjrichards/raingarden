<?php

namespace raingarden\rg_black_boxes\rg_logo;

class RG_Logo extends \black_willow\bw_nodes\BW_Black_Box {

	function __construct( $the_params_map ){
		parent::__construct( $the_params_map );

		$this->my_innerHTML = "

			##link href='rg_black_boxes/rg_logo/RG_Logo_Master.css' type='text/css' rel='stylesheet' title='rg_logo_init'>

			##div class='logo rgcafe wrapper {$this->get_my_type()}' id='the_rg_logo_wrapper'>
				##div class='logo raingarden wrapper {$this->get_my_type()}' id='the_raingarden_wrapper'>
					##svg class='logo raingarden instance' id='the_raingarden_instance' width='500' height='125' viewBox='0 0 500 125'>
						<clipPath id='the_clipping_path'>
							<use href='rg_black_boxes/rg_logo/rg_Logo_Raingarden_Defs.svg#the_mask' />
						</clipPath>
						<pattern id='the_pattern' patternUnits='userSpaceOnUse' x='0' y='0' width='2000' height='1000'>
							<image id='the_image' href='rg_black_boxes/rg_logo/rg_Logo_Blue_Background.jpg' x='0' y='0' width='2000' height='1000' />
						</pattern>
						<rect id='the_background' fill='url( #the_pattern )' clip-path='url( #the_clipping_path )' x='0' y='0' width='2000' height='1000' />
						<use id='the_inner_outline' href='rg_black_boxes/rg_logo/rg_Logo_Raingarden_Defs.svg#the_inner_path' />
						<use id='the_outer_outline' href='rg_black_boxes/rg_logo/rg_Logo_Raingarden_Defs.svg#the_outer_path' />
					##/svg>
				##/div>
				##div class='logo fern wrapper green {$this->get_my_type()}' id='the_green_fern_wrapper'>
					##svg class='logo fern instance green {$this->get_my_type()}' id='the_green_fern_instance' viewBox='0 0 400 125'>
						##use href='rg_black_boxes/rg_logo/rg_Logo_Fern_Defs.svg#the_fern_template'>##/use>
					##/svg>
				##/div>
				##div class='logo fern wrapper blue {$this->get_my_type()}' id='the_blue_fern_wrapper'>
					##svg class='logo fern instance blue {$this->get_my_type()}' id='the_blue_fern_instance' viewBox='0 0 400 125'>
						##use href='rg_black_boxes/rg_logo/rg_Logo_Fern_Defs.svg#the_fern_template'>##/use>
					##/svg>
				##/div>
				##div class='logo cafe wrapper {$this->get_my_type()}' id='the_cafe_wrapper'>
					##svg class='logo cafe instance {$this->get_my_type()}' id='the_cafe_instance' viewBox='0 0 400 125'>
						##use href='rg_black_boxes/rg_logo/rg_Logo_Cafe_Defs.svg#CAFE'>##/use>
					##/svg>
				##/div>
			##/div>
			##script type='text/javascript' src='rg_black_boxes/rg_logo/rg_Logo_RGCafe.js'>##/script>";
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