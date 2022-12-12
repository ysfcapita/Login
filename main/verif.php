<?php

require_once("connect.php");

session_start();


if (isset($_POST['user']) && isset($_POST['pass']) && !empty($_POST['user']) && !empty($_POST['pass'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];
}

$query = "select username, password from utilisateur where username = ?";

$stmt = $dbconnect->prepare($query);


$stmt->bindValue(1, $user);

$stmt->execute();

if (!empty($row = $stmt->fetchAll())) {
    if (password_verify($pass, $row[0]['password'])) {
        $_SESSION['user'] = $user;
        $_SESSION['isconn'] = true;
        header("location: /main/admin.php");
        exit;
    } else {
        header('Refresh: 3; url=/index.php');
        echo "<style>*{margin:0;padding:0;}</style><h1 style='background-color:#eee;text-align:center;margin:0 auto;width:100%;height:100vh;padding:20%; box-sizing:border-box;'>Lmot De Passe Ghalt m3lm, Lwa7d kaynsa ma3lich hh</h1>";
        exit;
    }
} else {
    header('Refresh: 3; url=/index.php');
    echo "<style>*{margin:0;padding:0;}</style><h1 style='background-color:#eee;text-align:center;margin:0 auto;width:100%;height:100vh;padding:20%; box-sizing:border-box;'>Ma3ndkch Compte Awldi...</h1>";
    exit;
}


?>