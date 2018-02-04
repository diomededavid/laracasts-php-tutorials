<?php
/**
 * Created by PhpStorm.
 * User: daviddiomede
 * Date: 1/16/18
 * Time: 10:12 PM
 */

class QueryBuilder {
	protected $pdo;

	public function __construct($pdo)
	{

		$this->pdo = $pdo;
	}

	public function selectAll($table){

		$statement = $this->pdo->prepare( "select * from {$table}" ); //prepare the sql query

		$statement->execute(); //execute the sql query

		return $statement->fetchAll( PDO::FETCH_CLASS); //can also use fetch

	}

}