<?php
require 'tropo.class.php';
$tropo = new Tropo();
$tropo->call("+xxx");
$transcription = new Transcription("mailto:example@xx.xx","12345", null,"de_DE");
$tropo->record(array(
'name' => 'recording',
'say' => 'Bitte lassen Sie eine Nachricht.',
'terminator' => '#',
'maxSilence' => 7,
'maxTime' => 60,
'transcription' => $transcription,
'timeout' => 10,
'voice' =>'Katrin'
));
$tropo->RenderJson();
?>