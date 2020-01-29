<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';


$batch = $_POST["batch"];
 $location = $_POST["location"];
  $date = $_POST["date"];
   $manager = $_POST["manager"];
    $agoprice = $_POST["agoprice"];
     $pmsprice = $_POST["pmsprice"];
      $agoopening= $_POST["agoopening"];
       $agoclosing = $_POST["agoclosing"];
       $agodelivered = $_POST["agodelivered"];
 $agortt = $_POST["agortt"];
  $pmsopening = $_POST["pmsopening"];
   $pmsclosing =$_POST["pmsclosing"]; 
    $pmsdelivered = $_POST["pmsdelivered"];
     $pmsrtt = $_POST["pmsrtt"];
     $attendants = $_POST["attendants"];
 $agoopeningmeter1 = $_POST["agoopeningmeter1"];
$agoopeningmeter2 = $_POST["agoopeningmeter2"];
$agoopeningmeter3 =$_POST["agoopeningmeter3"];
    $agoopeningmeter4 = $_POST["agoopeningmeter4"];
  $agoopeningmeter5 = $_POST["agoopeningmeter5"];
$agoopeningmeter6 = $_POST["agoopeningmeter6"];
 $pmsopeningmeter1 = $_POST["pmsopeningmeter1"];
  $pmsopeningmeter2 = $_POST["pmsopeningmeter2"];
$pmsopeningmeter3 = $_POST["pmsopeningmeter3"];
 $pmsopeningmeter4 = $_POST["pmsopeningmeter4"];
 $pmsopeningmeter5 = $_POST["pmsopeningmeter5"];
 $pmsopeningmeter6 = $_POST["pmsopeningmeter6"];
$agoclosingmeter1 = $_POST["agoclosingmeter1"];
 $agoclosingmeter2 = $_POST["agoclosingmeter2"];
$agoclosingmeter3 = $_POST["agoclosingmeter3"];
 $agoclosingmeter4 = $_POST["agoclosingmeter4"];
  $agoclosingmeter5 = $_POST["agoclosingmeter5"];
 $agoclosingmeter6 = $_POST["agoclosingmeter6"];
  $pmsclosingmeter1 = $_POST["pmsclosingmeter1"];
  $pmsclosingmeter2 = $_POST["pmsclosingmeter2"];
   $pmsclosingmeter3 = $_POST["pmsclosingmeter3"];
    $pmsclosingmeter4 = $_POST["batch"];
 $pmsclosingmeter5 = $_POST["pmsclosingmeter5"];
 $pmsclosingmeter6 = $_POST["pmsclosingmeter6"];
  $product = $_POST["product"];
   $creditamount = $_POST["creditamount"];
    $debtors = $_POST["debtors"];

    $totalcredit = $creditamount;




$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}



$sql = "INSERT INTO dailysales (batch, location, date, manager,
 agoprice, pmsprice, agoopening, agoclosing, agodelivered, agortt,
  pmsopening, pmsclosing, pmsdelivered, pmsrtt, attendants, agoopeningmeter1,
   agoopeningmeter2, agoopeningmeter3, agoopeningmeter4, agoopeningmeter5, agoopeningmeter6, 
   pmsopeningmeter1, pmsopeningmeter2, pmsopeningmeter3, pmsopeningmeter4, pmsopeningmeter5,
    pmsopeningmeter6, agoclosingmeter1, agoclosingmeter2, agoclosingmeter3, agoclosingmeter4,
     agoclosingmeter5, agoclosingmeter6, pmsclosingmeter1, pmsclosingmeter2, pmsclosingmeter3, 
     pmsclosingmeter4, pmsclosingmeter5, pmsclosingmeter6, product, creditamount, debtors)
      VALUES ('$batch', '$location', '$date', '$manager', '$agoprice', '$pmsprice', '$agoopening', '$agoclosing',
       '$agodelivered', '$agortt', '$pmsopening', '$pmsclosing', '$pmsdelivered', '$pmsrtt', '$attendants', '$agoopeningmeter1',
        '$agoopeningmeter2', '$agoopeningmeter3', '$agoopeningmeter4', '$agoopeningmeter5', '$agoopeningmeter6', '$pmsopeningmeter1', '$pmsopeningmeter2',
         '$pmsopeningmeter3', '$pmsopeningmeter4', '$pmsopeningmeter5', '$pmsopeningmeter6', '$agoclosingmeter1', '$agoclosingmeter2',
          '$agoclosingmeter3', '$agoclosingmeter4', '$agoclosingmeter5', '$agoclosingmeter6', '$pmsclosingmeter1', '$pmsclosingmeter2', '$pmsclosingmeter3',
           '$pmsclosingmeter4', '$pmsclosingmeter5', '$pmsclosingmeter6', '$product', '$creditamount', '$debtors')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: home.php');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>