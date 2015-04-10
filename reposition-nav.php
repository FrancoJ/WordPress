<?php
//* Reposition the primary navigation menu to top
remove_action( 'genesis_after_header', 'genesis_do_nav' );
//Choose hook area to move nav to - genesis_before
add_action( 'genesis_before', 'genesis_do_nav' );