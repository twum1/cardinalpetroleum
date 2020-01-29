
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
  width:300px;
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
<form action="dsalesengine.php" method="post">
<div class="container dsales">
<p>Daily Sales</p>
</div>
 
<div class="container dsfone">
Batch*<br><input type="number" name="batch" value="1" required>
<br>
<br>
<table>
    <tr><td>
location<br><input type="text" name="location" value="dansoman" ></td>
<td>Date<br><input type="date" name="date" value="2020-01-17" ></td></tr>
</table>
<br>
Manager/Supervisor<br><input type="text" name="manager" placeholder="<?=$_SESSION['name']?> " >
</div>
<div class="container dsftwo">

<table>
  <tr><th>Prod.Type</th><th>Unit Price GHS</th></tr>
 <tr> <td>Automotive Gas oil(AGO)</td><td><input type="text" name="agoprice" placeholder="5.399" value="5.3990"></td></tr>
 <tr> <td>Premium motor spirit(PMS)</td><td><input type="text" name="pmsprice" placeholder="5.390"value="5.390"></td></tr>
</table>
<br>
</div>
<div class="container dsfthree">
<table>
  <tr><th>Ago Tank</th></tr>
 <tr> <td>Opening</td><td><input type="text" name="agoopening" value="0" placeholder="0"></td></tr>
 <tr> <td>Closing</td><td><input type="text" name="agoclosing" value="0" placeholder="0"></td></tr>
 <tr> <td>Delivered Product</td><td><input type="text" name="agodelivered" value="0" placeholder="0"></td></tr>
 <tr> <td>R T T</td><td><input type="text" name="agortt" value="0" placeholder="0"></td></tr>
</table>
<br>
<table>
  <tr><th>PMS Tank</th></tr>
 <tr> <td>Opening</td><td><input type="text" name="pmsopening" value="0" placeholder="0"></td></tr>
 <tr> <td>Closing</td><td><input type="text" name="pmsclosing" value="0" placeholder="0"></td></tr>
 <tr> <td>Delivered Product</td><td><input type="text" name="pmsdelivered" value="0" placeholder="0"></td></tr>
 <tr> <td>R T T</td><td><input type="text" name="pmsrtt" value="0" placeholder="0"></td></tr>
</table>
<br>
</div>
<div class="container dsffour">

  <label for="sel1">Attendant Pump 1</label><br>
  <select class="" id="pone" name="attendants">
  <option value="none"><?=$_SESSION['name']?></option>
    <option value="Ibrahim Tahiru">Ibrahim Tahiru</option>
    <option value="Amasaman">Amasaman</option>
    <option value="Emmanuella">Emmanuella Afrakomah</option>
  </select>

  <table>
  <tr><th>Pump1</th><th></th><th>Readings</th></tr>
  <tr><td>Nozzle</td><td>Product Type</td><td>Opening</td><td>Closing</td></tr>
  <tr><td>Nozzle1</td><td>ago</td><td><input type="text" name="agoopeningmeter1" value="0" placeholder="0"></td><td><input type="text" name="agoclosingmeter1" value="0" placeholder="0"></td></tr>
  <tr><td>Nozzle2</td><td>ago</td><td><input type="text" name="agoopeningmeter2" value="0" placeholder="0"></td><td><input type="text" name="agoclosingmeter2" value="0" placeholder="0"></td></tr>
  <tr><td>Nozzle1</td><td>pms</td><td><input type="text" name="pmsopeningmeter1" value="0" placeholder="0"></td><td><input type="text" name="pmsclosingmeter1" value="0" placeholder="0"></td></tr>
  <tr><td>Nozzle2</td><td>pms</td><td><input type="text" name="pmsopeningmeter2" value="0" placeholder="0"></td><td><input type="text" name="pmsclosingmeter2" value="0" placeholder="0"></td></tr>

</table>

<br>
<label for="sel1">Attendant Pump 2</label><br>
  <select class="" id="ptwo" name="attendants">
  <option value="none"><?=$_SESSION['name']?></option>
    <option value="Ibrahim Tahiru">Ibrahim Tahiru</option>
    <option value="Amasaman">Amasaman</option>
    <option value="Emmanuella">Emmanuella Afrakomah</option>
  </select>

  <table>
  <tr><th>Pump1</th><th></th><th>Readings</th></tr>
  <tr><td>Nozzle</td><td>Product Type</td><td>Opening</td><td>Closing</td></tr>
  <tr><td>Nozzle1</td><td>ago</td><td><input type="text" name="agoopeningmeter3" value="0" placeholder="0"></td><td><input type="text" name="agoclosingmeter3" value="0" placeholder="0"></td></tr>
  <tr><td>Nozzle2</td><td>ago</td><td><input type="text" name="agoopeningmeter4" value="0" placeholder="0"></td><td><input type="text" name="agoclosingmeter4" value="0" placeholder="0"></td></tr>
  <tr><td>Nozzle1</td><td>pms</td><td><input type="text" name="pmsopeningmeter3" value="0" placeholder="0"></td><td><input type="text" name="pmsclosingmeter3" value="0" placeholder="0"></td></tr>
  <tr><td>Nozzle2</td><td>pms</td><td><input type="text" name="pmsopeningmeter4" value="0" placeholder="0"></td><td><input type="text" name="pmsclosingmeter4" value="0" placeholder="0"></td></tr>

</table>

<br>
<label for="sel1">Attendant Pump 3</label><br>
  <select class="" id="pthree" name="attendants">
  <option value="none"><?=$_SESSION['name']?></option>
    <option value="Ibrahim Tahiru">Ibrahim Tahiru</option>
    <option value="Amasaman">Amasaman</option>
    <option value="Emmanuella">Emmanuella Afrakomah</option>
  </select>

  <table>
  <tr><th>Pump1</th><th></th><th>Readings</th></tr>
  <tr><td>Nozzle</td><td>Product Type</td><td>Opening</td><td>Closing</td></tr>
  <tr><td>Nozzle1</td><td>ago</td><td><input type="text" name="agoopeningmeter5" value="0" placeholder="0"></td><td><input type="text" name="agoclosingmeter5" value="0" placeholder="0"></td></tr>
  <tr><td>Nozzle2</td><td>ago</td><td><input type="text" name="agoopeningmeter6" value="0" placeholder="0"></td><td><input type="text" name="agoclosingmeter6" value="0" placeholder="0"></td></tr>
  <tr><td>Nozzle1</td><td>pms</td><td><input type="text" name="pmsopeningmeter5" value="0" placeholder="0"></td><td><input type="text" name="pmsclosingmeter5" value="0" placeholder="0"></td></tr>
  <tr><td>Nozzle2</td><td>pms</td><td><input type="text" name="pmsopeningmeter6" value="0" placeholder="0"></td><td><input type="text" name="pmsclosingmeter6" value="0" placeholder="0"></td></tr>

</table>
<br>
</div>

<div class="container dsffive">
<br>
<table>
<tr><td>Day credit<br><select class="" id="" name="product">
    <option value="ago">Ago</option>
    <option value="pms">Pms</option>
    <option value="kero">Kero</option>
   
  </select></td><td><br><input type="number" name="totalcredit" value=" "></td></tr>

</table>
<br>
<table>
  
  <tr><td>Debtor Name</td><td>Product Type</td><td>Amount</td><td>Attendant</td></tr>
  <tr><td>
  <select class="" id="debtors" name="debtors">
    <option value="adroit360gh">Adroit360gh</option>
    <option value="companyone">company one</option>
    <option value="companytwo">company two</option>
    <option value="company three">company three</option>
  </select></td><td>
  <select class="" id="product">
  <option value="ago">Ago</option>
    <option value="pms">Pms</option>
    <option value="kero">Kero</option>
   
  </select></td>
  <td><input type="text" name="creditamount" value="0" placeholder="0"></td><td>
  <select class="" id="attendants">
    <option value="none"><?=$_SESSION['name']?></option>
    <option value="Ibrahim Tahiru">Ibrahim Tahiru</option>
    <option value="Amasaman">Amasaman</option>
    <option value="Emmanuella">Emmanuella Afrakomah</option>
  </select></td></tr>
  

</table>
<br>
</div>
<div class="container dsfsix">
  <br>
  <input style="color:white;width:50%;background-color:#04B45F;" type="submit" value="save">
 
</form>
<br>
</div>
<div class="container one">
    <p>copyright @adroit360gh</p>
   
  </div>
</div>
  
  
  
 
  

   
</body>
</html>