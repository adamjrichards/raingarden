<?php

namespace raingarden\rg_functions;
/*
* 	Raingarden post components
*/


function the_post_header() {

	$the_date = the_date();
	$breadcrumbs = bcn_display();
	echo "<header class='blog post default' id='the_post_header'>
			<h2 class='post date'>
				$the_date
			</h2>
			<h3 class='blog post default breadcrumbs'>
				$breadcrumbs
			</h3>
		</header>";

} // the_post_header()


function the_post_sidenotes_left( $the_category, $the_tags, $the_excerpt ) {

	$the_category = the_category();
	$the_tags = the_tags();
	$the_excerpt = the_excerpt();


	echo "<aside class='blog post default sidenotes-left' id='the_left_sidenotes'>
			<ul class='blog post default sidenotes-left'>
				<li class='post_categories' id='the_post_sidenotes-left_categories'>
					$_the_category
				</li>
				<li class='post_tags' id='the_post_sidenotes-left_categories'>
					$the_tags
				</li>
				<li class='post_excerpt' id='the_post_sidenotes-left_categories'>
					$the_excerpt
				</li>
			</ul>
		</aside>";
} // the_post_sidenotes_left()


function the_sidenote( $me ) {

	echo '<aside class="blog sidenote" id="the_sidenote" draggable="true" resize="both" onmouseenter="there_is_only_one_sidenote_at_a_time( this )">';

	if ( is_integer( $me ) ) {
		get_the_page_numbered( $me );
	} else if ( is_null( $me ) ) {
		get_a_recent_posts_widget();
	} else if ( is_string( $me ) ) {
		switch( $why_im_here ) {
			case "meta"		: the_widget( 'WP_Widget_Meta' );
								break;
			case "contact"	: the_widget( 'Contact' );
								break;
			default			: echo get_the_page_called( $me );
								break;
		}
	}

	echo "</aside>";

} // the_sidenote()


function the_post_sidenotes_right() {

	echo "<aside class='blog post default sidenotes-right' id='the_right_sidenotes'>
					<h4 id='the_sidenotes_title'>Sidenotes</h4>";

		the_widget( 'WP_Widget_Custom_HTML' );

	echo "</aside>";

} // the_post_sidenotes_right()


function the_post_content() {

	echo "<article class='blog post default text' id='the_post_content'>";

	echo "	<header class='blog post default text' id='the_post_header'>
				<h1 class='blog post default title'>";
					the_title();
	echo "		</h1>
			</header>";

	echo "	<main class='blog post default text' id='the_post_content'>";
				the_content( '...um...read more?', FALSE );
	echo "	</main>";

	echo "</article>";

} // the_post_sidenotes_right()

function the_post_excerpt( $ye_title, $ye_date, $ye_excerpt ) {

	echo "<article class='blog post excerpt' id='the_post_excerpt'>
			<h4 class='blog post excerpt title' id='the_excerpt_header'>$ye_title</h4>
			<main class='blog post excerpt text' id='the_excerpt_text'>
				$ye_date...<p>$ye_excerpt</p>
			</main>
		</article>";

} // the_post_excerpt()

function the_post_footer( $the_content ) {

	echo "<footer class='blog post default' id='the_post_footer'>
			$the_content
			</footer>";

} // the_post_footer()

