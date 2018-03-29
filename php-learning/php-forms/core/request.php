<?php
/**
 * Created by PhpStorm.
 * User: daviddiomede
 * Date: 1/17/18
 * Time: 9:27 PM
 */

class Request {

    public static function uri() {
    	//names?name=Dave
		return trim(
			parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
		);
    }

    public static function method(){
		return $_SERVER['REQUEST_METHOD'];
    }
}