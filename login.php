<?php
    if ( isset($_POST['login']) ) {
        if ( $_POST['login'] == 'FARMER' ) {
            header("Location: http://localhost/Shivoham/farmer_login.php");
            return;
        } else if ( $_POST['login'] == 'LAB' ) {
            header("Location: http://localhost/Shivoham/lab_login.php");
            return;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./navbar.css">
    <link rel="stylesheet" href="./card.css">
    <title>Login</title>

    <style>
        #card {
            width: 400px;
            height: 330px;
        }
        .underline-title {
            margin-top: -0.8rem;
        }
        #submit-btn {
            display: inline-block;
        }
        #farmer-btn {
            background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #24c64f;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 50px;
            transition: 0.25s;
            width: 153px;
            position: absolute;
            left: 630px;
            top: 400px;
        }
        #lab-btn {
            background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #24c64f;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 50px;
            transition: 0.25s;
            width: 153px;
            position: absolute;
            left: 800px;
            top: 400px;
        }
    </style>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <section id = "nav-bar">
        <nav class="navbar navbar-expand-lg navbar-custom">
          <a class="navbar-brand">SOIL TEST</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="http://localhost//Shivoham/Bank.html">HOME</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Shivoham/info.html">INFO</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Shivoham/sample.php">SUBMIT SAMPLE</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Shivoham/login.php">LOGIN</a>
              </li>
              </ul>
          </div>
          </nav>
      </section>

      <div id="card">
        <div id="card-content">
          <div id="card-title">
            <h2>LOGIN AS</h2>
            <div class="underline-title"></div>
          </div>
          <form method="post" class="form">
            <input id="farmer-btn" type="submit" name="login" value="FARMER" />
            <input id="lab-btn" type="submit" name="login" value="LAB" />
            <p>Don't have an account yet?</p>
            <a href="http://localhost/Shivoham/farmer_signup.php" id="farmersignup">Farmer</a>
            <a href="http://localhost/Shivoham/lab_signup.php" id="labsignup">Lab</a>
          </form>
        </div>
      </div>
    
</body>
</html>
