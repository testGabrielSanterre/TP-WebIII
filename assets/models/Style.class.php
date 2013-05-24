<?php
	
	class Style {

		protected $db;
		protected $results;



		public function __construct(){
			$this->db = new MysqliDb('localhost', 'root', 'admin', 'tpweb');
		}

		public function searchStyle($idStyle){
			return $this->db->where('idStyle', $idStyle)->get('styles');
		}

		public function getListStyle(){
			return $this->db->get('styles',array('idStyle','vchNomStyle','enumCollection'));
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