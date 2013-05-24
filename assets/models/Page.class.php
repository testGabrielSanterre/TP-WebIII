<?php
	
	class Page extends Connection{

		public static function searchPage($idPage){
			return parent::$db->where('idPage', $idPage)->get('pages');
		}

		public static function getListPage(){
			return parent::$db->get('pages',array('idPage','vchTitrePage'));
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