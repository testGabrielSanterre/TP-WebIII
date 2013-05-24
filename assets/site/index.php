<?php

	/***************************************************/
	/** Les classes modeles **/
	/***************************************************/

	require_once("../models/Connection.class.php"); 
	require_once("../models/Page.class.php");
	require_once("../models/Style.class.php");
	require_once("../models/Denim.class.php");

	/***************************************************/
	/** Les classes vues **/
	/***************************************************/	
	require_once("../views/ViewPage.class.php");
	require_once("../views/ViewStyle.class.php");
	require_once("../views/ViewDenim.class.php");

	/***************************************************/
	/** La classe controleur **/
	/***************************************************/
	require_once("../tools/lib/MysqliDb.class.php");

	/***************************************************/
	/** La classe controleur **/
	/***************************************************/
	require_once("ControllerSite.class.php");

	/***************************************************/
	/** Initialisation des variables **/
	/***************************************************/
	require_once("var.init.php");

	/***************************************************/
	/** Gabarit **/
	/***************************************************/
	require_once("gabarit.php");

?>