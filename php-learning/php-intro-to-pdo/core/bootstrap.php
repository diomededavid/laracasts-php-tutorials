<?php
/**
 * Created by PhpStorm.
 * User: daviddiomede
 * Date: 1/16/18
 * Time: 11:06 PM
 */

$app = [];

$app ['config'] = require 'config.php';


require 'core/router.php';
require 'core/request.php';
require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';

$app ['database'] = new QueryBuilder(
	Connection::make($app['config'] ['database'])
);