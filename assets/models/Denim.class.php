<?php
	
	class Denim extends Connection{

		protected $results;

		public function __construct(){
			parent::__construct();
		}

		public static function searchDenim($idDenim){
			return parent::$db->where('idDenim', $idDenim)->get('denims');
		}

		public static function getListDenim(){
			return parent::$db->get('denims');
		}

		public static function modifyPage($idPage, $updateData){
			$db->where('id', $idPage);
			$results = parent::$db->update('pages', $updateData);
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