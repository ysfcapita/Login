<?php

require_once("connect.php");


if (isset($_POST['user']) && isset($_POST['pass']) && !empty($_POST['user']) && !empty($_POST['pass'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];
}

if ($user && $pass) {

    $query = "insert into utilisateur( username, password ) values ( ? , ?)";

    $stmt = $dbconnect->prepare($query);

    $stmt->bindValue(1, $user);
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    //$stmt->bindvalue(2, $pass);
    $stmt->bindvalue(2, $hash);
    $stmt->execute();




    header('Refresh: 3; url=/index.php');
    echo "<style>*{margin:0;padding:0;}</style><h1 style='font-family:rubik;background-color:#eee;text-align:center;margin:0 auto;width:100%;height:100vh;padding:20%; box-sizing:border-box;'>Nadi kanadi</h1>";

} else {

    header('Refresh: 3; url=/main/register.php');
    echo "<style>*{margin:0;padding:0;}</style><h1 style='background-color:#eee;text-align:center;margin:0 auto;width:100%;height:100vh;padding:20%; box-sizing:border-box;'>3mer L3lomat Llah Yhfdk...</h1>";
}


?>