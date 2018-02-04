<?php


$animals = [
	'Dog',
	'Cat',
	'Bird',
];

//Anonymous function
$makeGreeting = function($name, $timeOfDay){

return ( "Good $timeOfDay, $name!" );
};


require 'index.view.php';

