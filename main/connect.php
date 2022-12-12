<?php

$host = "localhost";
$db = "signupform";
$user = "root";
$pass = "";

$dsn = "mysql:host=$host;dbname=$db";

try {
    $dbconnect = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die("<h1 style='text-align:center;'> Erreur Connection Not Established </h1>");
}

?>