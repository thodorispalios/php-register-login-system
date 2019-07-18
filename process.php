<?php
    //Passing values from form in login.php file
    $username = $_POST['user'];
    $password = $_POST['pass'];

    //Prevent MySQL injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    //Connect to the server and select database
    mysql_connect("localhost", "root", "");
    mysql_select_db("login");

    //Query the database for login
    $result = mysql_query("select * from user where username = '$username ' and password = '$password'") or die("Unable to login".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password) {
        echo "Login Success, Welcome ".$row['username'];
    } else {
        echo "Failed to Login";
    }
?>
