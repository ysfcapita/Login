<!-- <nav class="navbar navbar-expand-lg bg-light position-fixed">
    <div class="container-fluid navigation ">
      <a class="navbar-brand">Login Man</a>
      <a class="nav-link" href="#">Admin</a>
    </div>
  </nav> -->

<nav class="navbar navbar-expand-lg fixed-top bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Login Man</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
        </li>

        <?php

        session_start();

        if (empty($_SESSION['user']) || $_SESSION['isconn'] !== true) { ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/main/login.php">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/main/register.php">Sign Up</a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/main/admin.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/main/logout.php">Sign Out</a>
        </li>
        <?php } ?>
        <!-- <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li> -->
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid px-0 pb-0 min-vh-100 w-100 bg-dark position-relative overflow-auto main">