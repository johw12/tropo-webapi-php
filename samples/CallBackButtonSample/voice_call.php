	<?php

	require '../tropo.class.php';

	$tropo = new Tropo();

	// Get the number of the customer via the session
	$session = new Session();
	$customerNumber = $session->getParameters("num");

	// Start a call to the customer;
	$tropo->call("+".$customerNumber);
	
	// Inform him that he'll be transfered to the call center
	$tropo->say("Transferring you now, please wait");
	
	// Transfer the call to the call center
	$tropo->transfer("+1111111111111111");

	// Create JSON object that contains the instructions for the Tropo Servers
	$tropo->RenderJson();

	?>