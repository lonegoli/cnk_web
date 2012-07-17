<?php
function openSQLite3()
{
	$db=new SQLite3("../db/test.db3");
	return $db;
}
?>