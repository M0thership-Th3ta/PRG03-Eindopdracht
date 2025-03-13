<?php
$data = file_get_contents("../JS/data.json");
$vtubers = json_decode($data);

header("Content-Type: application/json");
echo json_encode($vtubers);
exit;
