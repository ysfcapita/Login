<?php


require_once("header.html");

require_once("nav.php");

?>


<div
    class="w-100 mychild border border-primary rounded position-absolute top-50 start-50 d-flex justify-content-center align-items-center flex-column">
    <h1 class="font pb-4"> Login </h1>
    <form class="w-100 px-4" method="post" action="verif.php">
        <div class="row pb-3">
            <div class="col ">
                <label for="user" class="pb-1">Username</label>
                <input name="user" class="form-control" id="user" type="text" placeholder="username">
            </div>
        </div>
        <div class="row pb-5">
            <div class="col ">
                <label for="password" class="pb-1">Password</label>
                <input name="pass" class="form-control" id="password" type="password" placeholder="password">
            </div>
        </div>
        <div class="row">
            <div class="col text-center pb-2">
                <button class="btn btn-success w-100" type="submit">Sign In</button>
            </div>
            <a href="/main/register.php" class="btn btn-link">Sign Up</a>
        </div>
    </form>
</div>


<?php

require_once("footer.html");

?>