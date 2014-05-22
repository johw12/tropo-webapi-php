<?php

	require '../tropo.class.php';
	
	$tropo = new Tropo();

	$session = new Session();
	$newParticipant = $session->getParameters("num");
	
	$tropo->call("+".$newParticipant);
	$tropo->say("Welcome! The conference call should start soon.");

	$tropo->conference("1337", array(
			"terminator"=>"*",
			"mute" => false,
			"playTones" => true
			)
		);
	$tropo->say("We hope you had fun, call back soon!");
	
?>