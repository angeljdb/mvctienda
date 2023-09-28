<?php

require_once "libs/MySQLdb.php";

/**
 * 
 */
class Application
{
	
	function __construct()
	{
		$db = MySQLdb::getInstance()->getDatabase();
	}
}

?>