<?php
require_once "pdo.php";
session_start();

if ( isset($_POST['email']) && isset($_POST['password'])){
<<<<<<< HEAD
  $sql = "SELECT * FROM lab WHERE email = :email AND lpassword = :password";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(
          ':email' => $_POST['email'],
          ':password' => $_POST['password']));
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      if($row === FALSE){
          $_SESSION['error'] = 'Incorrect email id or password.';
          header('Location: http://localhost/soil-test-analysis/lab_login.php');
          return;
      }
      $_SESSION['success'] = 'Login Successful.';
      $_SESSION['user_id'] = $row['email'];
      $_SESSION['name'] = $row['emp_name'];
      header('Location: http://localhost/soil-test-analysis/lab_home.php');
      return;
=======
    $sql = "SELECT * FROM lab WHERE email = :email AND lpassword = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
            ':email' => $_POST['email'],
            ':password' => $_POST['password']));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row === FALSE){
            $_SESSION['error'] = 'Incorrect email id or password.';
            header('Location: http://localhost/Shivoham/lab_login.php');
            return;
        }
        $_SESSION['success'] = 'Login Successful.';
        $_SESSION['user_id'] = $row['email'];
        $_SESSION['name'] = $row['emp_name'];
        header('Location: http://localhost/Shivoham/lab_home.php');
        return;

>>>>>>> de7d66447b9c6916eb2b72e2d8e3e79b3d4eb3f2
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="./card.css">
  <title>Lab Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<style>
    .underline-title {
        width: 100px;
    }
</style>

<body>
  
    <!-- Flash pattern -->
  <?php
  if ( isset($_SESSION['error']) ) {
      echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
      unset($_SESSION['error']);
  }
  if ( isset($_SESSION['success']) ) {
      echo '<p style="color:blue">'.$_SESSION['success']."</p>\n";
      unset($_SESSION['success']);
  }
  ?>
  
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LAB LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form">
        <label for="user-email" style="padding-top:13px">
            &nbsp;Email
          </label>
        <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password
          </label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <a href="#">
          <legend id="forgot-pass">Forgot password?</legend>
        </a>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
        <a href="http://localhost/soil-test-analysis/lab_signup.php" id="signup">Don't have account yet?</a>
      </form>
    </div>
  </div>
</body>

</html>
