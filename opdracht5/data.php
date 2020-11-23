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

$query = "
";

$result = $conn->query($query);

$numRows = mysqli_num_rows($result);

for ($i = 0; $i < $numRows; ++$i) {
    $row = $result->fetch_assoc();
}

$conn->close();

// echo json_encode();


?>