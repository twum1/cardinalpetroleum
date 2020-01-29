
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
  integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 195px;
  position: fixed;
  z-index: 1;
  top: 20;
  left: 0;
  background-color:#0a0d40;
  overflow-x: hidden;
  padding-top: 20px;
  padding-left: 10px;
}

.sidenav a {
  padding: 8px 8px 6px 16px;
  text-decoration: none;
  font-size: 17px;
  font-family: sans-serif;
  color: #f1f1f1;
  display: block;
}

.sidenav a:hover {
  color: #dfda61;
}

.main {
  margin-left: 155px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  .main{margin:0%;}
  .main{width:100%;}
  .main{background-color: whitesmoke;}
  
}
.main{
  top:20px;
  padding: 40px;
  background-color: #d2d2d0;
  margin-top: 20px;
}
.dashboard{
  padding-top: 20px;
  margin-top: 40px;

}
.container{
  background-color: whitesmoke;
  width: 100%;

}
.container{
  margin-top: 20px;
}
td{
  font-size: 17px;
}
.one{
    color: #dfda61;
    padding: 20px;
    text-align: center;
}
.dsales{
    padding: 10px;
    font-family: sans-serif;
}
.dsfone{
    padding: 10px;
}

td{
  border:solid thin;
  
  color: darkgray;
  width: 300px;
}
input{
  color: #d2d2d0;
}

</style>






</head>

<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
  <ul class="navbar-nav">
    <li class="nav-item active">
    
     <a href="profile.php"> <img src="img/rich.png" class="rounded-circle" alt="Cinque Terre" width="64" height="56"> </a>
    </li>
  
    
<li class="nav-item fixed-right">
    <a class="nav-link" >Station Supervisor <?=$_SESSION['name']?></a>
    </li>

    <li class="nav-item">
    <a class="fas fa-bars"  href="#news"></a>
    </li>
  </ul>
</nav>



<!-- side nav collum -->
<div class="sidenav">
<a class="dashboard" href="home.php">Dashboard</a>
  <b style="color: white">ENTRIES</b>
  <a  href="#news">All Records</a>
  <a href="#contact">Daily Sales</a>
  <a href="#about">Daily Expenses</a>
  <a class="" href="#">Debtor Payments</a>
  <a href="#news">Running Account</a>
  <a href="#contact">Lubricants</a>
  <b style="color:white">ADMINITRATION</b>
  <br>

<br>
<button type="button" class=" btn btn-info " data-toggle="collapse" data-target="#demo">Report</button>
<div id="dsales" class="collapse">
<a  href="#news">Daily Sales lts</a>
<a  href="#news">Daily Sales Ghs</a>
<a  href="#news">Daily Sales All s/s</a>
<a  href="metersaleslts.php">Meter Sales lts</a>
<a  href="#news">Meter Sales Ghs</a>

</div>

  <a href="logout.php">LogOut</a>
</div>

<div class="main">

 
<div class="container dsfone">
<form action="metersaleslts.php" method="POST">
<table>
    <tr><td>
location<br><input type="text" name="location" value="dansoman" ></td><td><label for="sel1">Product Type</label><br>
  <select class="" id="products" name="products">
    <option>AGO</option>
    <option>PMS</option>
    <option>KERO</option>
    <option>GAS</option>
  </select></td>
<td>From<br><input type="date" name="" value="2020-01-17" ></td><td>To<br><input type="date" name="" value="2020-01-17" ></td>
<td><label for="sli">Display</label><br><select class="" id="content" name="">
    <option>Pages</option>
    <option>All</option>
    
  </select></td><td>Reset<br><input type="submit"value="request" ></td></tr>
</table>
</form>


<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';





$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}


$sql = "SELECT * FROM dailysales";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Date: " . $row["date"]. " - location: " . $row["location"]. " - Manager: " . $row["manager"].       " -". "product Type: " . $row["product"]. "<br>";
    }
} else {
    echo "0 results";
}





?>
</div>


<br>
</div>
<div class="container one">
    <p>copyright @adroit360gh</p>
   
  </div>
</div>
  
  
  
 
  

   
</body>
</html>