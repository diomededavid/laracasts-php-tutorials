<?php


$person = [
	'age'       =>   31,
	'hair'      =>   'brown',
	'career'    =>   'developer',
];

$person['name'] = 'Dave';

//title, due, assigned_to, completed
$task = [
	'title'       => 'Learn PHP',
	'due'         => 'Monday',
	'name'        => 'Dave',
	'completed'   => false
];

$task_completed = $task['completed'] ? ' Complete' : ' Incomplete';



echo '<pre>';

//Stops after the below using the die function
		//die(var_dump ($person));


echo '</pre>';

require 'index.view.php';
