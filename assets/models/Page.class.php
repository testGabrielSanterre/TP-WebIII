<?php
	
	class Page {

		// /**
		// * L'identifiant de la page
		// *
		// * @var int
		// */
		// protected $iPage;
		// /**
		// * Le titre de la page
		// *
		// * @var string
		// */
		// protected $sTitle;
		// /**
		// * Le contenu de la page
		// *
		// * @var string
		// */
		// protected $sContent;
		/**
		* Le contenu de la page
		*
		* @var string
		*/
		protected $db;
		/**
		* Le contenu de la page
		*
		* @var string
		*/
		protected $results;



		public function __construct(){
			$this->db = new MysqliDb('localhost', 'root', 'admin', 'tpweb');
		}

		public function searchPage($idPage){
			return $this->db->where('idPage', $idPage)->get('pages');
		}

		public function getListPage(){
			return $this->db->get('pages',array('idPage','vchTitrePage'));
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