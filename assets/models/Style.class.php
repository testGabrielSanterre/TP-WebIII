<?php
	
	class Style extends Connection{

		protected $results;

		public static function searchStyle($idStyle){
			return parent::$db->where('idStyle', $idStyle)->get('styles');
		}

		public static function getListStyle(){
			return parent::$db->get('styles',array('idStyle','vchNomStyle','enumCollection'));
		}

		public static function modifyPage($idPage, $updateData){
			parent::$db->where('id', $idPage);
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