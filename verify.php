<?php

$username = $_POST['username'];
$password = $_POST['password'];

$con = new mysqli('localhost', 'root', '', 'tables');

$a = "select password from logindetails where username='$username';";
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
$b = $con->query($a);
$r = $b->fetch_assoc();
if ($b == false)
{
      echo "wrong username";
      exit();
}

if ($b == true) {
    if ($r['password'] == $password)
        header("Location: add.php");
    if ($r['password'] != $password)
        echo "wrong password";
}

?>