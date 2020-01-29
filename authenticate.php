<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_HOST2 = 'den1.mysql4.gear.host';
$DATABASE_USER = 'root';
$DATABASE_USER2 = 'cardinalpetroldb';
$DATABASE_PASS = '';
$DATABASE_PASS2 = 'Uz4W~m?0JexH';
$DATABASE_NAME = 'phplogin';
$DATABASE_NAME = 'cardinalpetroldb';

$con = mysqli_connect($DATABASE_HOST2, $DATABASE_USER2, $DATABASE_PASS2, $DATABASE_NAME2);
if ( mysqli_connect_errno() ) {
	
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['username'], $_POST['password']) ) {
	
	die ('Please fill both the username and password field!');
}
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), 
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
    $stmt->store_result();
    

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if ($_POST['password'] === $password) {
           
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
    
            header('Location: home.php');
              
        } else {
            echo 'Incorrect password!';
        }
    } else {
        echo 'Incorrect username!';
    }


	$stmt->close();
}
?>
