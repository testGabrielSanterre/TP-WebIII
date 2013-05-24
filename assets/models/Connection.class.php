<?php
	
	class Connection {

		protected $db;

		public function __construct(){
			$this->db = new MysqliDb('localhost', 'root', 'admin', 'tpweb');
		}

	}
	
?>