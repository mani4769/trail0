<?php
    session_start();
    include("connection.php");

    if(isset($_SESSION['username'])){
        header("Location: welcome.php");
        exit();
    }

    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $cpassword = $_POST['cpass'];
        
        // Check if username and email are unique
        $stmt = $conn->prepare("SELECT * FROM users WHERE username=? OR email=?");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if($row) {
            if($row['username'] == $username) {
                echo '<script>alert("Username already exists!");</script>';
            } else if($row['email'] == $email) {
                echo '<script>alert("Email already exists!");</script>';
            }
        } else {
            // Check if passwords match
            if($password == $cpassword) {
                // Hash the password
                $hash = password_hash($password, PASSWORD_DEFAULT);

                // Insert new user
                $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $username, $email, $hash);
                $stmt->execute();

                if($stmt->affected_rows > 0) {
                    header("Location: login.php");
                    exit();
                } else {
                    echo '<script>alert("Error in registration!");</script>';
                }
            } else {
                echo '<script>alert("Passwords do not match!");</script>';
            }
        }
    }
?>
<?php include("navbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="form">
        <h1 id="heading">Sign Up Form</h1><br>
        <form name="form" action="signup.php" method="POST">
            <label>Enter Username: </label>
            <input type="text" id="user" name="user" required><br><br>
            <label>Enter Email: </label>
            <input type="email" id="email" name="email" required><br><br>
            <label>Create Password: </label>
            <input type="password" id="pass" name="pass" required><br><br>
            <label>Retype Password: </label>
            <input type="password" id="cpass" name="cpass" required><br><br>
            <input type="submit" id="btn" value="SignIn" name = "submit"/ style="background-color: #b7e3f4;">


        </form>
    </div>
</body>
</html>
