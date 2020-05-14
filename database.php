<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
</html>

<?php

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:sallehackaton.database.windows.net,1433; Database = WebSiteSalles", "Mathieu", "{HackatonSalle1234}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Mathieu@sallehackaton", "pwd" => "{HackatonSalle1234}", "Database" => "WebSiteSalles", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:sallehackaton.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


?>

<?php
$email=$_POST['email'];
$lastname=$_POST['lastname'];
$name=$_POST['name'];
$place=$_POST['place'];

echo $_POST[name];

$base->query("INSERT INTO neighbour (neig_name, neig_localisation, email, neig_last_name) VALUES ('$name', '$place', '$email', '$lastname'")


?>

<?php

echo '<h1>Merci de vous être inscrit sur le site</h1>'

?>