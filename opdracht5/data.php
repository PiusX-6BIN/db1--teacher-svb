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
    SELECT * FROM Recepten;
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

$conn->close();

echo json_encode($recept);


?>