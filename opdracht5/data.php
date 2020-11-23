<?php

$request = $_GET["recept"];

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
    WHERE Recepten.naam = '$request';
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
    WHERE Recepten.naam = '$request';
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
    WHERE Recepten.naam = '$request';
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

// HET MAISCH SCHEMA TOEVOEGEN
$recept["maischSchema"] = array();
$query = "
    SELECT MaischSchema.temperatuur, MaischSchema.tijd
    FROM Recepten
    INNER JOIN MaischSchema ON Recepten.naam = MaischSchema.recept
    WHERE Recepten.naam = '$request'
    ORDER BY MaischSchema.volgorde;
";
$result = $conn->query($query);

$numRows = mysqli_num_rows($result);
for ($i = 0; $i < $numRows; ++$i) {
    $row = $result->fetch_assoc();
    
    $maischStap = array();
    $maischStap["temperatuur"] = $row["temperatuur"];
    $maischStap["tijd"] = $row["tijd"];

    $recept["maischSchema"][] = $maischStap;
}

// DE OVERIGE INGREDIENTEN TOEVOEGEN
$recept["overige"] = array();
$query = "
    SELECT OverigeIngredienten.soort, OverigeIngredienten.hoeveelheid, OverigeIngredienten.kooktijd
    FROM Recepten
    INNER JOIN OverigeIngredienten ON Recepten.naam = OverigeIngredienten.recept
    WHERE Recepten.naam = '$request';
";
$result = $conn->query($query);

$numRows = mysqli_num_rows($result);
for ($i = 0; $i < $numRows; ++$i) {
    $row = $result->fetch_assoc();
    
    $ingredient = array();
    $ingredient["hoeveelheid"] = $row["hoeveelheid"];
    $ingredient["naam"] = $row["soort"];
    $ingredient["kooktijd"] = $row["kooktijd"];

    $recept["overige"][] = $ingredient;
}

$conn->close();

echo json_encode($recept);


?>