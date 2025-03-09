<?php
//Require functions for actions
require_once "includes/actions.php";

//Based on the existence of the GET parameter, 1 of the 2 functions will be called
if (!isset($_GET['id'])) {
    $data = getVTubers();
} else {
    $data = getVTuberDetails($_GET['id']);
}

//Set the header & output JSON so the client will know what to expect.
header("Content-Type: application/json");
echo $data !== false ? json_encode($data) : json_encode(['error' => 'Not found']);
exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>VTuber Gallery</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <script type="text/javascript" src="JS/main.js" defer></script>
</head>
<body>
<main>
    <section id="selection-menu">
        <h1>Select a Group</h1>
        <a>Hololive</a>
        <a>Nijisanji</a>
        <a>VShojo</a>
        <a>Indie VTubers</a>
    </section>
</main>
</body>
</html>