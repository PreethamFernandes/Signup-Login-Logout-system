<?php 
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
    $loggedin = true;
  } else {
    $loggedin = false;
  }

  if($loggedin) {
    // Here i have given $login as logout coz if i give logout value to $logout it creates so some space
    $login = "Logout";
    $signup = "";
    $logout = "";
    $logoutlink = "/login_signup/logout.php";
  }
  if(!$loggedin) {
    $login = "Login";
    $signup = "SignUp";
    $logout = "";
    $logoutlink = "/login_signup/login.php";
    
  }
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/login_signup/login.php">I-secure</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login_signup/welcome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="'.$logoutlink.'">'.$login.'</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login_signup/signup.php">'.$signup.'</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login_signup/logout.php">'.$logout.'</a>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>'

?>