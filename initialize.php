<?php

	// Assign file paths to PHP constants
	// __FILE__ returns the current path to this file
	// dirname() returns the path to the parent directory

	define("INITIAL_PATH", dirname(__FILE__));
	define("SHARED_PATH", INITIAL_PATH . '/shared');

	// Assign the root URL to a PHP constant
	// * Do not need to include the domain
	// * Use same document root as webserver
	// * Can set a hardcoded value:
	// define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
	// define("WWW_ROOT", '');
	// * Can dynamically find everything in URL up to "/public"
	//$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
	//$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
	define("WWW_ROOT", '');

	require_once('functions.php');

?>