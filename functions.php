<?php
add_action( 'after_setup_theme', 'twentyelevenrepost_setup' );
function twentyelevenrepost_setup() {
	define( 'REPOST_HEADER_IMAGE_WIDTH', apply_filters( 'repost_twentyeleven_header_image_width', 10));
	define( 'REPOST_HEADER_IMAGE_HEIGHT', apply_filters( 'repost_twentyeleven_header_image_height', 50));
}

