<?php


session_start();

if (isset($_SESSION['isconn']) || $_SESSION['isconn'] === true) {

    session_unset();
    session_destroy();

    header("location: /index.php");
}


?>

<!-- <script text="javascript"> window.location.href = "/index.php"</script> -->