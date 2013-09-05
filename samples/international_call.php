<?php
require_once 'tropo.class.php';

  $tropo = new Tropo();
  $tropo->record(array(
    'say' => 'Willkommen zur Abfrage! Sag uns bitte, wie es dir geht!',
	'voice' => 'Katrin',
	'beep' => true,
	'maxTime' => 900,
	
	'recordURI' => "http://www.thapps.net/recordings/record.php", // or replace with getself() . '?record'
	'transcriptionOutURI' => "http://www.thapps.net/transcriptions/transcribe.php",
	// The two lines above might be filled with invalid URLs
	
	// ****************************************************************
	'transcriptionLanguage' => "de_DE", // Tell Telekom Tropo what language should expect;
	// For full information about transcriptions and what languages please visit: https://www.developergarden.com/apis/docu-support/#c13170
	// There you can find documentation for Telekom Tropo and examples how to work with it.
	// ****************************************************************
	
	'terminator' => '#',
	'recordFormat' => 'audio/wav', // Tell Tropo in which format to record
    ));	
  print $tropo;

?>