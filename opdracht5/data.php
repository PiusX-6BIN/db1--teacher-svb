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

// ALGEMENE INFO VAN RECEPT (naam, SG, eindvol., gist)

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

// ALLE HOPSOORTEN DIE GEBRUIKT WORDEN + EIGENSCHAPPEN VAN DE HOP

$recept["hop"] = array();
$query = "
    SELECT ReceptHop.hopsoort, ReceptHop.hoeveelheid, ReceptHop.kooktijd, Hop.alpha
    FROM Recepten
    INNER JOIN ReceptHop ON ReceptHop.recept = Recepten.naam
    INNER JOIN Hop		 ON ReceptHop.hopsoort = Hop.naam
    WHERE Recepten.naam = 'tripel';
";
$result = $conn->query($query);

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

// ALLE GRAANSOORTEN DIE GEBRUIKT WORDEN + EIGENSCHAPPEN VAN HET GRAAN
$recept["granen"] = array();
$query = "
    SELECT ReceptGranen.hoeveelheid, ReceptGranen.graansoort, Granen.EBC
    FROM Recepten
    INNER JOIN ReceptGranen ON Recepten.naam = ReceptGranen.recept
    INNER JOIN Granen		ON ReceptGranen.graansoort = Granen.soort
    WHERE Recepten.naam = 'tripel';
";
$result = $conn->query($query);

$numRows = mysqli_num_rows($result);
for ($i = 0; $i < $numRows; ++$i) {
    $row = $result->fetch_assoc();
    
    $graan = array();
    $graan["hoeveelheid"] = $row["hoeveelheid"];
    $graan["soort"] = $row["graansoort"];
    $graan["EBC"] = $row["EBC"];

    $recept["granen"][] = $graan;
}

$conn->close();

echo json_encode($recept);


?>