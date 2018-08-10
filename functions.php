<?php 

	// URL function to aid with links
	function url_for($script_path) {
		// add the leading '/' if not present
		if($script_path[0] != '/') {
			$script_path = '/'. $script_path;
		}
		return WWW_ROOT . $script_path;
	}

	/* Needs
		1. Add htmlentities function to encode content from database
		2. Add urlencode and rawurlencode functions
		3. Add server error display functions
		4. Add form error messages functions
		5. Add redirection function
	*/

?>