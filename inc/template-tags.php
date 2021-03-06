<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package wntblanktheme
 */

if ( ! function_exists( 'wntblanktheme_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function wntblanktheme_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'posted on %s', 'post date', 'wntblanktheme' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'wntblanktheme' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	if ('post' === get_post_type()){
	echo '<a href="'.get_post_type_archive_link( 'post' ).'" class="archive_link_post">Article</a> '; // WPCS: XSS OK.
	}
	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'wntblanktheme_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function wntblanktheme_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( '<span class="sep"></span>' );
		if ( $categories_list && wntblanktheme_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'wntblanktheme' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '','<span class="sep"></span>' );
		//$tags_list = get_the_tag_list( '<ul class="list-inline"><li class="list-inline-item btn btn-secondary btn-sm">','</li><li class="list-inline-item btn btn-secondary btn-sm">','</li></ul>');
		
		if ( $tags_list ) {
			printf( '<div class="tags-links btn-group" role="group" aria-label="Tag list">' . esc_html__( 'Tagged %1$s', 'wntblanktheme' ) . '</div>', $tags_list ); 
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		comments_popup_link( esc_html__( 'Leave a comment', 'wntblanktheme' ), esc_html__( '1 Comment', 'wntblanktheme' ), esc_html__( '% Comments', 'wntblanktheme' ), 'comments-link btn btn-sm btn-light' );
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'wntblanktheme' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'',
		'',
		'',
		'edit-link btn btn-xs btn-outline-primary'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function wntblanktheme_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'wntblanktheme_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'wntblanktheme_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so wntblanktheme_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so wntblanktheme_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in wntblanktheme_categorized_blog.
 */
function wntblanktheme_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'wntblanktheme_categories' );
}
add_action( 'edit_category', 'wntblanktheme_category_transient_flusher' );
add_action( 'save_post',     'wntblanktheme_category_transient_flusher' );
