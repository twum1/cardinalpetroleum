
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

p{
  margin:0px;
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
  .main{color: whitesmoke;}
  .container{color:whitesmoke;}
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
.one{
    color: #dfda61;
    padding: 20px;
    text-align: center;
}

.container{
  background-color: whitesmoke;
  width: 100%;

}
.container{
  margin-top: 20px;
  position: relative;
}
td{
  font-size: 17px;
}
.container.date{
    width: auto;
    background-color: #0a0d40;
    color: white;
    float: right;
    margin: 0px;
    position: absolute;
    right: 0px;
    height: auto;
    padding:10px;
}
.container.date::after{
  content: "";
  clear:both;
}
.nav-item bar{
  padding-top: 5px;
}
.navbar-nav{
  display: flex;
  justify-content: left;
  align-items: center;
}
</style>






</head>

<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
  <ul class="navbar-nav">
    <li class="nav-item active">
    
     <a href="profile.php"> <img src="img/rich.png" class="rounded-circle" alt="Cinque Terre" width="44" height="46"> </a>
    </li>
  
    
    <li class="nav-item fixed-right">
    <a class="nav-link" >Station Supervisor <?=$_SESSION['name']?></a>
    </li>

    <li class="nav-item bar">
    <a class="fas fa-bars"  data-toggle="collapse" data-target=".sidenav"></a>
    </li>
  </ul>
</nav>



<!-- side nav collum -->
<div class="sidenav" >
<a class="dashboard" href="home.php">Dashboard</a>
  <b style="color: white">ENTRIES</b>
  <a  href="#news">All Records</a>
  <a href="dailysales.php">Daily Sales</a>
  <a href="#about">Daily Expenses</a>
  <a class="" href="#">Debtor Payments</a>
  <a href="#news">Running Account</a>
  <a href="#contact">Lubricants</a>
  <b style="color:white">ADMINITRATION</b>
  <br>

  <br>
  <button type="button" class=" btn btn-info " data-toggle="collapse" data-target="#demo">Report</button>
  <div id="demo" class="collapse">
  <a  href="#news">Daily Sales lts</a>
  <a  href="#news">Daily Sales Ghs</a>
  <a  href="#news">Daily Sales All s/s</a>
  <a  href="metersaleslts.php">Meter Sales lts</a>
  <a  href="#news">Meter Sales Ghs</a>
  

  </div>
  <a href="logout.php">LogOut</a>
</div>

<div class="main">
<div class="container">
<style>
* {box-sizing: border-box}

.container {
  width: 100%;
  background-color: whitesmoke;
}

.skills {
  text-align: right;
  padding-top: 5px;
  padding-bottom: 10px;
  padding-right: 20px;
  color: white;
}

.AGO {width: 90%; background-color: #4CAF50;}
.PMS {width: 80%; background-color: #2196F3;}
.KERO {width: 65%; background-color: #f44336;}
.GAS {width: 60%; background-color: #808080;}
</style>
</head>
<body>
<div class="container date">
 <p> <?php

 echo "Today is " . date("Y-m-d")
  ?>
  </P>
</div>
<br>
<h1>Product Report</h1>


<div class="container">
<p>AGO</p>
  <div class="skills AGO">90 liters</div>
</div>


<div class="container">
<p>PMS</p>
  <div class="skills PMS">80 liters</div>
</div>


<div class="container">
<p>KERO</p>
  <div class="skills KERO">65 liters</div>
</div>


<div class="container">
<p>GAS</p>
  <div class="skills GAS">60 liters</div>
</div>
<br>

</div>
<div class="container">
  
  <p>Cardinal Petroleum combines the experience of personnel & 
  first class equipment with cutting edge technology and a strong emphasis 
  on innovation, reliability, quality, integrity and customer services.
   We are the most dynamic and fastest growing innovative solution provider in
    the Energy industry in the Middle East and North Africa (MENA) region.</p>

</div>
<div class="container">
<table class="table" >
    <thead >
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
      </tr>      
      <tr class="table-primary">
        <td>Primary</td>
        <td>Joe</td>
        <td>joe@example.com</td>
      </tr>
      <tr class="table-success">
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="table-danger">
        <td>Danger</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="table-info">
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr class="table-warning">
        <td>Warning</td>
        <td>Refs</td>
        <td>bo@example.com</td>
      </tr>
      <tr class="table-active">
        <td>Active</td>
        <td>Activeson</td>
        <td>act@example.com</td>
      </tr>
      <tr class="table-secondary">
        <td>Secondary</td>
        <td>Secondson</td>
        <td>sec@example.com</td>
      </tr>
      <tr class="table-light">
        <td>Light</td>
        <td>Angie</td>
        <td>angie@example.com</td>
      </tr>
      <tr class="table-dark text-dark">
        <td>Dark</td>
        <td>Bo</td>
        <td>bo@example.com</td>
      </tr>
    </tbody>
  </table>
  <b style="color:green";>Welcome back, <?=$_SESSION['name']?>!</b>
 
</div>
<div class="container one">
    <p>copyright @adroit360gh</p>
   
  </div>
</div>
  
  
  
 
  

   
</body>
</html>