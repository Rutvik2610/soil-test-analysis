<?php
require_once "pdo.php";
session_start();

if ( isset($_POST['submit'])) {
    //Data Validation
    if ( strlen($_POST['name']) < 1 || strlen($_POST['aadhaar']) != 12 || strlen($_POST['address']) < 1
         || strlen($_POST['acres']) < 1 || strlen($_POST['contact']) != 10 ) {
        $_SESSION['error'] = 'Please enter correct details.';
        header("Location: http://localhost/Shivoham/farmer_signup.php");
        return;
        }
    if ( strpos($_POST['email'],'@') === false ) {
        $_SESSION['error'] = 'Please enter a valid email id.';
        header("Location: http://localhost/Shivoham/farmer_signup.php");
        return;
        }

    $sql = "INSERT INTO farmers (aadhaar_no, farmer_name, address, acres, contact, email, fpassword)
            VALUES (:aadhaar, :name, :address, :acres, :contact, :email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':aadhaar' => $_POST['aadhaar'] + 0,
            ':name' => $_POST['name'],
            ':address' => $_POST['address'],
            ':acres' => $_POST['acres'] + 0.0,
            ':contact' => $_POST['contact'] + 0,
            ':email' => $_POST['email'],
            ':password' => $_POST['password']));
        $_SESSION['success'] = "Account created Successfully.\nLogin to continue.";
        header('Location: http://localhost/Shivoham/farmer_login.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./navbar.css">
    <link rel="stylesheet" href="./card.css">
    <title>Farmer Signup</title>
    <style>
      #card {
        height: 750px;
        margin: 150px 0px 193px 500px;
        width: 500px;
      }
      .underline-title {
        margin-top: -0.7rem;
        width: 200px;
      }
    </style>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <div id="card">
        <div id="card-content">
          <div id="card-title">
            <h2>FARMER SIGNUP</h2>
            <div class="underline-title"></div>
          </div>
          <form method="post" class="form">
            <label for="user-email" style="padding-top:13px">
                &nbsp;Name
              </label>
            <input id="user-email" class="form-content" type="text" name="name" autocomplete="on" required />
            <div class="form-border"></div>
            <label for="user-password" style="padding-top:22px">&nbsp;Aadhaar No
              </label>
            <input id="user-password" class="form-content" type="text" name="aadhaar" required />
            <div class="form-border"></div>
            <label for="user-password" style="padding-top:22px">&nbsp;Address
            </label>
          <input id="user-password" class="form-content" type="text" name="address" required />
          <div class="form-border"></div>
          <label for="user-password" style="padding-top:22px">&nbsp;Acres
              </label>
            <input id="user-password" class="form-content" type="text" name="acres" required />
            <div class="form-border"></div>
            <label for="user-password" style="padding-top:22px">&nbsp;Contact No
            </label>
          <input id="user-password" class="form-content" type="text" name="contact" required />
          <div class="form-border"></div>
          <label for="user-email" style="padding-top:22px">
            &nbsp;Email
          </label>
        <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password
          </label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>

            <input id="submit-btn" type="submit" name="submit" value="SIGN UP" />
            <a href="http://localhost/Shivoham/farmer_login.php" id="signup">Already have an Account? Login</a>

          </form>
        </div>
      </div>
    
</body>
</html>
