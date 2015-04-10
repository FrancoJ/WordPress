<?php
// Move Featured Image above post title in Genesis Framework 2.0
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
add_action( 'genesis_entry_header', 'genesis_do_post_image', 8 );
add_action( 'genesis_entry_header', 'genesis_do_post_title', 9 );