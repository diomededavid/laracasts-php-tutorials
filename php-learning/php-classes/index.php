<?php
/**
 * Created by PhpStorm.
 * User: daviddiomede
 * Date: 11/28/17
 * The PHP Practitioner: Lesson 12
 * Todo Application
 */

require 'functions.php';

class Task {
	public $description;

	public $completed = false;


	public function __construct( $description ) {
		//Automatically triggered on instantiation
		$this->description = $description;
	}

	public function complete() {
		$this->completed = true; // complete the task
	}

	public function isComplete() {
		return $this->completed;
	}
}

$tasks = [
	new Task( 'Go to the store' ), // a new task object
	new Task( 'Finish my screencast' ),
	new Task( 'Learn more php' ),
];

$tasks[0]->complete();

//dd($tasks);

require 'index.view.php';

