<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
    <title>sign detection</title>
</head>
<div class="mani" style="background-color: #005580;">
<body style="background-color: #005580;">
  <marquee class="blink" style="font-size: 180%;background-color: #005580;">BENEVOLENT MINDS</marquee>
  <header class="heading text-center" style="background-color:#b7e3f4;">
    <nav class="navbar navbar-expand-sm navbar-light bg-light" style="background-color: #005580;">
      
     
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: #005580;">
        <ul class="navbar-nav mr-auto" style="padding-left: 80%;">
        <form class="d-flex" >
        <a class="btn btn-outline-success mx-2" type="submit" href="signup.php">Signup</a>
        <a class="btn btn-outline-primary mx-2" type="submit" href="login.php">Login</a>
        <a class="btn btn-outline-danger mx-2" type="submit" href="logout.php">Logout</a>
    </form>
        </ul>

        </form>

      </div>
    </nav>
  </header>
    </div>
</body>


<?php
 include("connection.php");

  mysqli_close($conn);


?>