
function change_the_logo_style_to( one_of_these ) {
	var the_blue_fern_wrapper = document.getElementById( 'the_blue_fern_wrapper' );
	var the_green_fern_wrapper = document.getElementById( 'the_green_fern_wrapper' );
	var the_cafe = document.getElementById( 'the_cafe_wrapper' );
	var the_raingarden_wrapper = document.getElementById( 'the_raingarden_wrapper' );
	var the_rg_logo_wrapper = document.getElementById( 'the_rg_logo_wrapper' );

	the_rg_logo_wrapper.className = 'logo rgcafe wrapper ' + one_of_these + ' dom_node black_box';
	the_blue_fern_wrapper.className = 'logo fern wrapper ' + one_of_these + ' dom_node black_box';
	the_green_fern_wrapper.className = 'logo fern wrapper ' + one_of_these + ' dom_node black_box';
	the_cafe_wrapper.className = 'logo cafe wrapper ' + one_of_these + ' dom_node black_box';
	the_raingarden_wrapper.className = 'logo raingarden wrapper ' + one_of_these + ' dom_node black_box';
}