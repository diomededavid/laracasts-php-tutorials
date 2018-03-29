
<?php
/**
 * Created by PhpStorm.
 * User: daviddiomede
 * Date: 11/28/17
 * The PHP Practitioner: Intro to PDO: Lesson 13
 * Todo Application
 */

$database = require 'core/bootstrap.php';



require Router::load( 'routes.php' )->direct(Request::uri(), Request::method());