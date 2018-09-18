<?php
/**
 * @author Papa Amadou adboulaye Ba
 * Custom function for the Unite child theme
 */
/**
 * @author Papa Amadou abdoulaye Ba
 * this function will return the list of a given taxonomy wrapped around  a tags
 * @param $postID the id of the post type (films)
 * @param $term the name of the taxonomy
 *
 * @return string
 */
function films_get_terms( $postID, $term ){
	$terms_list = wp_get_post_terms($postID, $term);
	$output = '';
	$i      = 0;

	foreach( $terms_list as $term ){
		$i++;
		if( $i > 1 ){ $output .= ' '; }
		$output .= '<a class="tag" href="' . get_term_link( $term ) . '">'. $term->name .'</a>';
	}
	return $output;
}
