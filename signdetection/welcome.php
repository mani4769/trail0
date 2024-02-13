<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin'])!=true){
        header("location:login.php");
        exit;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
  <?php
    include "navbar.php";
    ?>
    <br><br><br>

    <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
    <div class="logo">
    <img src="logo.jpg" height="400vh" width="53%" style="margin-left: 23%;margin-top: 2%;">
  </div><br>
  <a href="userpage.php"><input type="submit" id="color" value="Get Started" name = "submit"/ style="width: 10%;margin-left:44%;"></a>
  </body>
</html>