<?php
	
	class Connection {

		public static $db;

		const SERVER = "localhost";
		const USER = "root";
		const PW = "admin";
		const DB = "tpweb";

		public function __construct($pServer=self::SERVER, $pUser=self::USER, $pPassword=self::PW, $pDB=self::DB){
			Connection::$db = new MysqliDb($pServer, $pUser, $pPassword, $pDB);
		}

	}
	
?>