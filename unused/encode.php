<?php
$vtubers = [
    ["name" => "Calliope Mori", "group" => "Hololive"],
    ["name" => "Takanashi Kiara", "group" => "Hololive"],
    ["name" => "Gawr Gura", "group" => "Hololive"],
    ["name" => "Ina'nis Ninomae", "group" => "Hololive"],
    ["name" => "Amelia Watson", "group" => "Hololive"],
    ["name" => "Selen Tatsuki", "group" => "Nijisanji"],
    ["name" => "Scarle Yonaguni", "group" => "Nijisanji"],
    ["name" => "Ironmouse", "group" => "VShojo"],
    ["name" => "Silvervale", "group" => "VShojo"],
    ["name" => "Nyanners", "group" => "VShojo"],
    ["name" => "Miori Celesta", "group" => "Indie"]
];
header("Content-Type: application/json");
echo json_encode($vtubers);
exit;
