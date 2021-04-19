<?php
require_once "pdo.php";
session_start();

if ( isset($_POST['Submit'])) {

    $ph=$_POST['ph'];
    $nitrogen=$_POST['nitrogen'];
    $phosphorus = $_POST['phosphorus'];
    $pottasium = $_POST['pottasium'];
    $calcium= $_POST['calcium'];
    $magnesium = $_POST['magnesium'];
    $salinity= $_POST['salinity'];
    $zinc= $_POST['zinc'];
    $iron= $_POST['iron'];
    $manganese = $_POST['manganese'];
    $copper = $_POST['copper'];
    $sodium = $_POST['sodium'];
    $farmer_name = $_POST['farmer_name'];
    $aadhaar_no = $_POST['aadhaar_no'];
    
    try{
    $sql ="INSERT INTO report(ph,nitrogen,phosphorus,pottasium,calcium,magnesium,salinity,zinc,iron,manganese,copper,sodium,farmer_name,aadhaar_no) VALUES (:ph,:nitrogen,:phosphorus,:pottasium,:calcium,:magnesium,:salinity,:zinc,:iron,:manganese,:copper,:sodium,:farmer_name,:aadhaar_no)";

    $stmt= $pdo->prepare($sql);
    $stmt->execute([
        'ph'=>$ph,
        'nitrogen' =>$nitrogen,
        'phosphorus' =>$phosphorus,
        'pottasium' => $pottasium,
        'calcium' => $calcium,
        'magnesium' => $magnesium,
        'salinity' => $salinity,
        'zinc' => $zinc,
        'iron' => $iron,
        'manganese' => $manganese,
        'copper' => $copper,
        'sodium' => $sodium,
        'farmer_name' => $farmer_name,
        'aadhaar_no' => $aadhaar_no,
    ]);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
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
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./navbar.css">
    <title>Lab Form</title>
    <style>
        iframe {
            position: relative;
            left: 30%;
            margin-top: 8%;
        }
        h3 {
            text-align: center;
            margin-top: 1%;
        }

        .aadhar {
            padding-bottom: 2%;
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
                  <a class="nav-link" href="http://localhost//soil-test-analysis/lab_home.php">HOME</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="http://localhost/soil-test-analysis/report.php">SUBMIT SAMPLE</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="http://localhost/soil-test-analysis/lab_login.php">LOGIN</a>
              </li>
              </ul>
          </div>
          </nav>
      </section>

    <div class = 'container'>
        <div class = 'py-5 text-center'>
            <h2>
                Lab Form
            </h2>
            <p class = 'lead'>Below is a form to be filled at Laboratory's End</p>

        </div>
    </div>

    <div class = 'container'>
        <h4 class ='mb-3 '>SOIL PROFILE:</h4>
        <form method="post" class="form">
        <div class="row aadhar">
            <div class="col-sm-6">
                <label for="Aadhar No." class="form-label">Aadhar No</label>
                <input type="text" class="form-control" id="aadhar_No" name="aadhaar_no"  required/>
            </div>
            <div class="col-sm-6">
                <label for="Farmer Name" class="form-label">Farmer Name</label>
                <input type="text" class="form-control" id="farmer_name" name="farmer_name"  required/>
            </div>
        </div>
        <div class ='row'>
            <div class="col-sm-6 mb-4">
                <label for="pH" class="form-label">pH</label>
                <input type="text" class="form-control" id="pH" name="ph" required>
                
              </div>
           
              <div class="col-sm-6">
                <label for="Nitrogen" class="form-label">Nitrogen</label>
                <input type="text" class="form-control" id="Nitrogen" name="nitrogen" required>
               
              </div>
        </div>
        <div class ='row'>
            <div class="col-sm-6 mb-4">
                <label for="Phosphoru" class="form-label">Phosphorus</label>
                <input type="text" class="form-control" id="Phosphoru" name="phosphorus" required>
                
              </div>
           
              <div class="col-sm-6">
                <label for="Pottasium" class="form-label">Pottasium</label>
                <input type="text" class="form-control" id="Pottasium" name="pottasium" required>
               
              </div>
        </div>
        <div class ='row'>
            <div class="col-sm-6 mb-4">
                <label for="Calcium" class="form-label">Calcium</label>
                <input type="text" class="form-control" id="Calcium" name="calcium" required>
                
              </div>
           
              <div class="col-sm-6">
                <label for="magnesium" class="form-label">Magnesium</label>
                <input type="text" class="form-control" id="Magnesium" name="magnesium" required>
               
              </div>
        </div>
        <div class ='row'>
            <div class="col-sm-6 mb-4">
                <label for="Salinity" class="form-label">Salinity</label>
                <input type="text" class="form-control" id="Salinity" name="salinity" required>
                
              </div>
           
              <div class="col-sm-6">
                <label for="Zinc" class="form-label">Zinc</label>
                <input type="text" class="form-control" id="Zinc" name="zinc" required>
               
              </div>
        </div>
        <div class ='row'>
            <div class="col-sm-6 mb-4">
                <label for="Iron" class="form-label">Iron</label>
                <input type="text" class="form-control" id="Iron" name="iron" required>
                
              </div>
           
              <div class="col-sm-6">
                <label for="Manganese" class="form-label">Manganese</label>
                <input type="text" class="form-control" id="Manganese" name="manganese" required>
               
              </div>
        </div>
        <div class ='row'>
            <div class="col-sm-6 mb-4">
                <label for="Copper" class="form-label">Copper</label>
                <input type="text" class="form-control" id="Copper" name="copper" required>
                
              </div>
           
              <div class="col-sm-6">
                <label for="Sodium" class="form-label">Sodium</label>
                <input type="text" class="form-control" id="Sodium" name="sodium" required>               
              </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-12">
            <input class="btn btn-success btn-block" id="submit-btn" type="submit" name="Submit" value="Submit" />
            </div>
        </div>
    </form>
    </div>      
</body>
</html>
