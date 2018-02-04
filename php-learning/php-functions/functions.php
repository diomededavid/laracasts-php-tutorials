<?php
/**
 * Created by PhpStorm.
 * User: daviddiomede
 * Date: 9/10/17
 * Time: 1:08 PM
 */

function dd( $data ) {

	echo '<pre>';
	die( var_dump( $data) );
	echo '</pre>';
}


//Displays message based on age set.
function allowed_age($age) {
	if ( $age >= 21 ) {
		echo 'Welcome';
	} else {
		echo 'You are not old enough to enter';
	}
}

//Console log function. Just playing around
function debug( $msg ) {
	$msg = str_replace( '"', '\\"', $msg );
	echo '<script>console.console.log( \"$msg\" )</script>';
}