<?php

	class ControllerSite {

		private $data = array();

		public function __construct() {

			// test unitaire
			$this->oPage = new Page();
			$this->oViewPage = new ViewPage();
			echo "<hr>";
			$this->page = $this->oPage->searchPage(1);
			$this->oViewPage->afficherPage($this->page);
			echo "<hr>";
			$this->pages = $this->oPage->getListPage();
			$this->oViewPage->afficherListePages($this->pages);
			echo "<hr>";
			$this->oStyle = new Style();
			$this->oViewStyle = new ViewStyle();
			echo "<hr>";
			$this->style = $this->oStyle->searchStyle(1);
			$this->oViewStyle->afficherStyle($this->style);
			echo "<hr>";
			$this->styles = $this->oStyle->getListStyle();
			$this->oViewStyle->afficherListeStyles($this->styles);
			echo "<hr>";
			$this->oDenim = new Denim();
			$this->oViewDenim = new ViewDenim();
			echo "<hr>";
			$this->denim = $this->oDenim->searchDenim(1);
			$this->style = $this->oStyle->searchStyle($this->denim[0]['idStyle']);
			$this->oViewDenim->afficherDenim($this->denim, $this->style);
			echo "<hr>";
			$this->denims = $this->oDenim->getListDenim();
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