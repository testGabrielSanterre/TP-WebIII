<?php

	class ControllerSite {

		private $data = array();

		public function __construct() {
			$this->oConnection = new Connection();
			// test unitaire
			$this->oViewPage = new ViewPage();
			echo "<hr>";
			$this->page = Page::searchPage(1);
			$this->oViewPage->afficherPage($this->page);
			echo "<hr>";
			$this->pages = Page::getListPage();
			$this->oViewPage->afficherListePages($this->pages);
			echo "<hr>";
			$this->oViewStyle = new ViewStyle();
			echo "<hr>";
			$this->style = Style::searchStyle(1);
			$this->oViewStyle->afficherStyle($this->style);
			echo "<hr>";
			$this->styles = Style::getListStyle();
			$this->oViewStyle->afficherListeStyles($this->styles);
			echo "<hr>";
			$this->oViewDenim = new ViewDenim();
			echo "<hr>";
			$this->denim = Denim::searchDenim(1);
			$this->style = Style::searchStyle($this->denim[0]['idStyle']);
			$this->oViewDenim->afficherDenim($this->denim, $this->style);
			echo "<hr>";
			$this->denims = Denim::getListDenim();
			$this->oViewDenim->afficherListeDenims($this->denims);
			echo "<hr>";

		}

		/////////////////////////////////////////////////////////////////////////////////////
		///////////////////////////// GETTER SETTER ISSET UNSET /////////////////////////////
		/////////////////////////////////////////////////////////////////////////////////////
		
		public function __set($name, $value) {
			$this->data[$name] = $value;
		}

		public function __get($name) {
			if (array_key_exists($name, $this->data)) {
				return $this->data[$name];
			}
		}

		public function __isset($name) {
			return isset($this->data[$name]);
		}

		public function __unset($name) {
			unset($this->data[$name]);
		}

		/////////////////////////////////////////////////////////////////////////////////////
		///////////////////////////// GETTER SETTER ISSET UNSET /////////////////////////////
		/////////////////////////////////////////////////////////////////////////////////////
	}

?>