<?php
require 'tropo.class.php';

	$tropo = new Tropo();

	$tropo->call("+xxxxxx");

	$tropo->startRecording(array("url" => "xxxxxxx", "transcriptionOutURI" => "mailto:xxxx@xxx.xx", "transcriptionLanguage" => "de_DE"));

	$options = array("choices" => "Rot, Blau, Grün", "name" => "color", "attempts" => 3, recognizer = "de-de", voice = "Katrin");
	 
	$tropo->ask("Welche ist deine Lieblingsfarbe? Rot, Blau oder Grün?", $options);

	$tropo->stopRecording();

	$tropo->RenderJson();
?>
