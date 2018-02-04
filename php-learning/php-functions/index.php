<?php
/**
 * Created by PhpStorm.
 * User: daviddiomede
 * Date: 9/10/17
 * Time: 12:56 PM
 */

require 'functions.php';

$data = [ 'dog', 'cat' ];




$age = 21;
allowed_age($age);

//dd - Stands for Die and dump
dd( $data);

require 'index.view.php';