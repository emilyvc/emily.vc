<?php

// Anchor link when erroring
// -------------------------------------------------------------
add_filter( 'gform_confirmation_anchor', create_function( '', 'return true;' ) );

// Error message
// -------------------------------------------------------------
add_filter( 'gform_validation_message', 'change_message', 10, 2 );
	function change_message( $message, $form ){
	return "<p class=\"gform_message\")><strong class=\"note note--error\">Please complete the required fields and try again</strong></p>";
}

// Switch to <button> element
// -------------------------------------------------------------
add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ){
	$button_array = $form["button"];
	$button_text = $button_array["text"];
    return '<button type="submit" class="btn btn--primary" id="gform_submit_button_' . $form["id"] . '">' . $button_text . '<span class="icon--arrow-right"></span></button>';
}