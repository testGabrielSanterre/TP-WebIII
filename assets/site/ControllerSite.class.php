<?php

	class ControllerSite {

		private $data = array();

		public function __construct() {
			$this->oConnection = new Connection();
			// test unitaire
			echo "<hr>";
			$this->page = Page::searchPage(1);
			ViewPage::afficherPage($this->page);
			echo "<hr>";
			$this->pages = Page::getListPage();
			ViewPage::afficherListePages($this->pages);
			echo "<hr>";
			echo "<hr>";
			$this->style = Style::searchStyle(1);
			ViewStyle::afficherStyle($this->style);
			echo "<hr>";
			$this->styles = Style::getListStyle();
			ViewStyle::afficherListeStyles($this->styles);
			echo "<hr>";
			echo "<hr>";
			$this->denim = Denim::searchDenim(1);
			$this->style = Style::searchStyle($this->denim[0]['idStyle']);
			ViewDenim::afficherDenim($this->denim, $this->style);
			echo "<hr>";
			$this->denims = Denim::getListDenim();
			ViewDenim::afficherListeDenims($this->denims);
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