<?php 
	
	
	$productionServers = array('yourdomain.com');
	$stagingServers    = array('stage');
	$localServers      = array('loc','dev');



	$authDomain 			 = $_SERVER['HTTP_HOST'];
	$msg = '<h1>Where am I?</h1><p>You need to setup your server names in folder <code>wp-config</code></p>';

	$env = false;

	for($i = 0; $i < count($productionServers); $i++) {
		if( strpos( $authDomain, $productionServers[$i] ) !== false){
			$env = 'production';
		}
	}
	
	for($i = 0; $i < count($stagingServers); $i++) {
		if( strpos( $authDomain, $stagingServers[$i] ) !== false) {
			$env = 'staging';
		}
	}

	for($i = 0; $i < count($localServers); $i++) {
		if( strpos( $authDomain, $localServers[$i] ) !== false) {
			$env = 'local';
		}
	}

	if( $env !== false ){
		include('.env.' . $env . '.php');
	} else {
		die($msg);
	}
