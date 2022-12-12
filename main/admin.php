<?php

require_once("header.html");
require_once("nav.php");


if (!isset($_SESSION['isconn']) || $_SESSION['isconn'] !== true) {

    // header('Refresh: 3; url=/index.php');
    echo "<style>*{margin:0;padding:0;}</style><h1 style='font-family: rubik; font-size: 80px; background-color:#eee;text-align:center;margin:0 auto;width:100%;height:calc(100vh - 56px);padding:20%; box-sizing:border-box;'>Ala Mat7m9nich</h1>";
    exit;
}

?>


<style>
    * {
        margin: 0;
        padding: 0;
    }
</style>
<h1
    style='font-size: 80px; background-color:#eee;text-align:center;margin:0 auto;width:100%;height:calc(100vh - 56px);padding:20%; box-sizing:border-box;'>
    Mr7ba Mr7ba
    <?php echo "{$_SESSION['user']}"; ?>
</h1>

<?php
require_once("footer.html");

?>