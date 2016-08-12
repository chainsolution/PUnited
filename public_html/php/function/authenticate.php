<?php
	define('USER', 'visavis');
	define('PASSWORD', 'pu9225');
	$ERROR_MSG = "
		<h1>Authorization Required</h1>
		<p>
			This server could not verify that you are authorized 
			to access the document requested. Either you supplied 
			the wrong credentials (e.g., bad password), 
			or your browser doesn't understand how to 
			supply the credentials required.
		</p>
		<hr>
		<address>Apache Server at ".$_SERVER['SERVER_NAME']." Port 80</address>
	";
	function authenticate(){
		header('WWW-Authenticate: Basic realm="Restrict area"');
		header('HTTP/1.0 401 Unauthorized');
	}

	if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])){
		authenticate();
		die($ERROR_MSG);
		exit();
	}elseif (isset($_SERVER['PHP_AUTH_USER']) && $_SERVER['PHP_AUTH_USER'] == USER && isset($_SERVER['PHP_AUTH_PW']) && $_SERVER['PHP_AUTH_PW'] == PASSWORD){
		return;
	}else{
		authenticate();
		die($ERROR_MSG);
	}
?>