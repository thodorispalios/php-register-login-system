<?php // access.php
include_once 'config.php';
error_reporting(E_ERROR);

//Το αρχείο αυτό ελέγχει εαν ο χρήστης που προσπαθεί να μπει σε μία από τις υποσελίδες του site, έχει συνδεθεί. Εαν δεν έχει
//συνδεθεί του δίνει τη δυνατότητα να το κάνει μέσω της παρακάτω φόρμας ή να εγγραφεί με παραπομπή στο register.php 

if(!isset($_SESSION)) 
    { 
        session_start(); 
} 

$username = isset($_POST['username']) ? $_POST['username'] : $_SESSION['username'];
$password  = isset($_POST['password']) ? $_POST['password'] : $_SESSION['password'];


if(!isset($username)) {
	?>
	<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<title>Παρακαλώ Συνδεθείτε</title>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			
			<!--Template based on URL below-->
        	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

	        <!-- Bootstrap core CSS -->
	        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	        <!-- Place your stylesheet here-->
	        <link href="/css/styles.css" rel="stylesheet" type="text/css">
		</head>
		<body>
			<div class="alert alert-danger" role="alert">
			  	<h3> Παρακαλώ Συνδεθείτε </h3>
				<p>Πρέπει να συνδεθείτε στον λογαριασμό σας για να δείτε αυτή τη σελίδα. Εάν δεν έχετε λογαριασμό, πατήστε εγγραφή</p>
			</div>
			<div class="text-center mt-3 pt-3">
				<form action="login.php" method="post">
	                    <div class="form-row">
	                        <div class="col">
	                        </div>
	                        <div class="col-sm-3">
	                            <h1>Σύνδεση</h1>
	                            <hr class="mb-3">
	                            <label for="username"><b>Όνομα Χρήστη</b></label>
	                            <input class="form-control" type="text" name="username" placeholder="Username" required>

	                            <label for="password"><b>Κωδικός</b></label>
	                            <input class="form-control" type="text" name="password" placeholder="Password" required>

	                            <hr class="mb-3">
	                            <input class="btn btn-primary" type="submit" name="login_btn" value="Σύνδεση" />

	                            <input class="btn btn-secondary" onclick="window.location.href = 'register.php';" value="Εγγραφή" />

	                        </div>
	                        <div class="col">
	                        </div>
	                    </div>
	            </form>
            </div>
		</body>
	</html>
	<?php
	exit;
}

$_SESSION['username'] 	= 	$username;
$_SESSION['password'] 	= 	$password;
$_SESSION['userID']		=	$userID;
$_SESSION['loginID']	=	$loginID;

$db = mysqli_connect("localhost", "root", "", "webite");

$sql = "SELECT userID, username, password FROM user WHERE username = '$username' AND password = $password";

$result = mysqli_query($db, $sql);


if(mysqli_num_rows($result) == 1){
    $_SESSION['message'] = "Επιτυχής Σύνδεση";
    $_SESSION['username'] = $username; 

	//Καταγραφή του εκάστοτε login
    $_SESSION["userId"] = $sql['userID'];
    $date = date('Y-m-d H:i:s');
    $sql1 = mysqli_query($success, "INSERT INTO login VALUES ('$date', 'userID')".$_POST['date'] and $_POST['userID']);
    $row = mysqli_num_rows($sql1);

	header("location: index.php");

}else {
	$_SESSION['message'] = "Λανθασμένο όνομα χρήστη ή κωδικός";
}

?>