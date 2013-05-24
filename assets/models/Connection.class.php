<?php
	
	class Connection {

		public static $db;

		public function __construct(){
			Connection::$db = new MysqliDb('localhost', 'root', 'admin', 'tpweb');
		}

	}
	
?>