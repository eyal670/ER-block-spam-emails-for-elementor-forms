<?php
/*
Plugin Name: ER block spam emails for elementor forms
Description: block specific spam emails for elementor by emails list
Author: Eyal Ron Web Development
Developer: Eyal Ron
version: 1.0
@create date 2021-01-24 11:14:02
@modify date 2021-01-24 11:18:04
*/
//// Validate if Email field is spam
add_action( 'elementor_pro/forms/validation/email', function( $field, $record, $ajax_handler ) {
    // Looking if email found in spam array, you can add to the array
    $spamemails = array("ericjonesonline@outlook.com", "eric@talkwithwebvisitor.com");
    if ( in_array( $field['value'] , $spamemails) ) {
        $ajax_handler->add_error( $field['id'], 'אנחנו לא אוהבים ספאם, נסו מייל אחר' );
    }
}, 10, 3 );