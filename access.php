<?php // accesscontrol.php
include_once 'config.php';


session_start();
$username = isset($_POST['username']) ? $_POST['username'] : $_SESSION['username'];
$passw  = isset($_POST['password']) ? $_POST['password'] : $_SESSION['password'];

if (isset($_POST['username']) {
	$username = $_POST['username'];
} else {
	$username = $_SESSION['username'];
}

if (isset($_POST['password']) {
	$password = $_POST['password'];
} else {
	$password = $_SESSION['password'];
}

if(!isset($username)) {
	?>
	<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<title> Please Log In for Access </title>
			<meta http-equiv="Content-Type"
			content="text/html; charset=iso-8859-1" />
		</head>
		<body>
			<h1> Παρακαλώ Συνδεθείτε </h1>
			<p>Πρέπει να συνδεθείτε στον λογαριασμό σας για να δείτε αυτή τη σελίδα. Εάν δεν έχετε λογαριασμό, εγγραφείτε εδώ: <a href="register.php">Πατήστε εδώ</a></p>
			
			<p><form method="post" action="<?=$_SERVER['PHP_SELF']?>">
				Όνομα Χρήστη: <input type="text" name="username" size="8" /><br />
				Κωδικός: <input type="password" name="password" SIZE="8" /><br />
				<input type="submit" value="Log in" />
			</form></p>
		</body>
	</html>
	<?php
	exit;
}
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
dbConnect("webite");

$sql = "SELECT * FROM user WHERE
username = '$username' AND password = $password";

$result = mysql_query($sql);

if (!$result) {

error('Υπήρξε πρόβλημα κατά την επικοινωνία με τη Βάση Δεδομένων');
}
?>