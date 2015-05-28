<?php

class Db {

	var $connection;

	function db($username, $password) {
		$this->connection = mysql_connect($username, $password);
	}
}

$db = new Db('lenilson', 'mingattos');