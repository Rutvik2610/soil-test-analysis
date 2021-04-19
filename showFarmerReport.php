<?php
 require_once "pdo.php";
 session_start();

 require 'fpdf.php';     
 $pdf = new FPDF();
 $pdf->AddPage();
 $pdf->SetFont('Arial','B',16);
 $pdf->setTextColor(252, 3, 3);
 $pdf->Cell(200,20,'Soil Test Analysis',0,1,'C');
 $pdf->setLeftMargin(30);
 $pdf->setTextColor(0, 0, 0);
 $pdf->Cell(20,10,"Date:",0,0,'C');
 $pdf->Cell(30,10,date("j-n-Y"),0,1,'C');
        // table column
 $pdf->Cell(20,10,'farmer_ID',1,0,'C');
 $pdf->Cell(40,10,'farmer_Name',1,0,'C');
 $pdf->Cell(40,10,'Aadhaar No',1,0,'C');
 $pdf->Cell(40,10,'PH',1,1,'C');
 $pdf->Cell(40,10,'Nitrogen',1,1,'C');
 $pdf->Cell(40,10,'Phosphorus',1,1,'C');
 $pdf->Cell(40,10,'Pottasium',1,1,'C');
 $pdf->Cell(40,10,'Calcium',1,1,'C');
 $pdf->Cell(40,10,'Magnesium',1,1,'C');
 $pdf->Cell(40,10,'Salinity',1,1,'C');
 $pdf->Cell(40,10,'Zinc',1,1,'C');
 $pdf->Cell(40,10,'Iron',1,1,'C');
 $pdf->Cell(40,10,'Manganese',1,1,'C');
 $pdf->Cell(40,10,'Copper',1,1,'C');
 $pdf->Cell(40,10,'Sodium',1,1,'C');
 
 
 // table rows
 $pdf->SetFont('Arial','',14);
 $con = new PDO('mysql:host=localhost;dbname=project','root','');
 $query ="SELECT * FROM report where ";
 $stmt= $pdo->prepare($query);
 $result->execute();
 $stmt->execute();
 $users = $stmt->fetchAll();
 foreach($users as $user)
 {
    $pdf->Cell(20,10,++$i,1,0,'C');
    $pdf->Cell(40,10,$report['name'],1,0,'C');
    $pdf->Cell(40,10,$report['age'],1,0,'C');
    $pdf->Cell(40,10,$report['salary'],1,1,'C');
 }

        }

        $pdf->Output();
?>