<?php

require 'dbConection.php';

function fetchAll() {

	$db = global $db;

	$database = mysql_select_db('database_name');

	$sql = "SELECT * FROM table_name";

	$resource = mysql_query($sql);

	$retorno  = array();

	while($registro = $resource) {
		$retorno[] = $registro;
	}

	return $retorno;
}