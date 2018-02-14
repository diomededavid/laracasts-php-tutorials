<?php
/**
 * Created by PhpStorm.
 * User: daviddiomede
 * Date: 1/17/18
 * Time: 9:27 PM
 */

class Request {

    public static function uri() {
        return trim( $_SERVER['REQUEST_URI'], '/' );
    }
}