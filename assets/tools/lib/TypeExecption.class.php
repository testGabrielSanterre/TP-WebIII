<?php

	class TypeException extends Exception{

		const EST_NUMERIQUE = "La valeur n'est pas numérique";

		function __construc($message="", $code=0){
			parent::__construc($message, $code);
		}

		public function estNemurique($valeur){
			(!is_numeric($valeur)) ? throw new TypeException(self::EST_NUMERIQUE);
		}

	}

?>