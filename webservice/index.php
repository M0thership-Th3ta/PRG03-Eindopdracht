<?php
//Require functions for actions
require_once "includes/actions.php";

//Get the VTubers from actions.php
$vtubers = getVTubers();

//Set the header & output JSON so the client will know what to expect.
header("Content-Type: application/json");
echo $vtubers !== false ? json_encode($vtubers) : json_encode(['error' => 'Not found']);
exit;

