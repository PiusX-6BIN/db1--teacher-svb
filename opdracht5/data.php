<?php

$request = $_GET["vraag"];

$servername = "localhost";
$username = "bin20";
$password = "m\$gx3I96";
$dbname = "bin20";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

$recept = array();

$query = "
    SELECT * 
    FROM Recepten
    WHERE Recepten.naam = 'tripel';
";

$result = $conn->query($query);

$numRows = mysqli_num_rows($result);
for ($i = 0; $i < $numRows; ++$i) {
    $row = $result->fetch_assoc();

    $recept["titel"] = $row["naam"];
    $recept["beginSG"] = $row["beginSG"];
    $recept["eindvolume"] = $row["eindvolume"];
    $recept["gist"] = $row["gist"];
}

$query = "
    SELECT ReceptHop.hopsoort, ReceptHop.hoeveelheid, ReceptHop.kooktijd, Hop.alpha
    FROM Recepten
    INNER JOIN ReceptHop ON ReceptHop.recept = Recepten.naam
    INNER JOIN Hop		 ON ReceptHop.hopsoort = Hop.naam
    WHERE Recepten.naam = 'tripel';
";

$result = $conn->query($query);

$recept["hop"] = array();
$numRows = mysqli_num_rows($result);
for ($i = 0; $i < $numRows; ++$i) {
    $row = $result->fetch_assoc();
    
    $hop = array();
    $hop["hoeveelheid"] = $row["hoeveelheid"];
    $hop["soort"] = $row["hopsoort"];
    $hop["alpha"] = $row["alpha"];
    $hop["kooktijd"] = $row["kooktijd"];

    $recept["hop"][] = $hop;
}

$conn->close();

echo json_encode($recept);


?>