<?php
require_once "pdo.php";
session_start();

if ( isset($_POST['submit'])){
    //Data Validation
    if ( strlen($_POST['name']) < 1 || strlen($_POST['password']) < 1){
       $_SESSION['error'] = 'Please enter correct details.';
       header("Location: http://localhost/soil-test-analysis/lab_signup.php");
       return;
       }
    if ( strpos($_POST['email'],'@') === false ) {
        $_SESSION['error'] = 'Please enter a valid email id.';
        header("Location: http://localhost/soil-test-analysis/lab_signup.php");
        return;
        }
    $sql = "INSERT INTO lab (email, emp_name, lpassword)
            VALUES (:email, :name, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
              ':email' => $_POST['email'],
              ':name' => $_POST['name'],
              ':password' => $_POST['password']));
            $_SESSION['success'] = "Account created Successfully.\nLogin to continue.";
            header('Location: http://localhost/soil-test-analysis/lab_login.php');
            return;
}

// Flash pattern
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./card.css">
    <title>Lab Signup</title>
    <style>
        #card {
            height: 450px;
        }
    </style>
</head>
<body>
    <div id="card">
        <div id="card-content">
          <div id="card-title">
            <h2>LAB SIGNUP</h2>
            <div class="underline-title"></div>
          </div>
          <form method="post" class="form">
            <label for="user-email" style="padding-top:13px">
                &nbsp;Name
              </label>
            <input id="user-email" class="form-content" type="text" name="name" autocomplete="on" required />
            <div class="form-border"></div>
            <label for="user-email" style="padding-top:13px">
                &nbsp;Email
              </label>
            <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
            <div class="form-border"></div>
            <label for="user-password" style="padding-top:22px">&nbsp;Password
              </label>
            <input id="user-password" class="form-content" type="password" name="password" required />
            <div class="form-border"></div>
            <input id="submit-btn" type="submit" name="submit" value="SIGN UP" />
            <a href="http://localhost/soil-test-analysis/lab_login.php" id="signup">Already have an account? Login</a>
          </form>
        </div>
      </div>
</body>
</html>
