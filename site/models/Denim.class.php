<?php
	
	class Denim {

		protected $db;
		protected $results;



		public function __construct(){
			$this->db = new MysqliDb('localhost', 'root', 'admin', 'tpweb');
		}

		public function searchDenim($idDenim){
			return $this->db->where('idDenim', $idDenim)->get('denims');
		}

		public function getListDenim(){
			return $this->db->get('denims');
		}

		public function modifyPage($idPage, $updateData){
			$db->where('id', $idPage);
			$results = $db->update('pages', $updateData);
		}


		// SETTER GETTER
		public function __set($name, $value) {
			$this->$name = $value;
		}

		public function __get($name) {
			if (isset($name)) {
				return $this->$name;
			}
		}

	}
	
?>