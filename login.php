<?php
ini_set( 'display_errors', 1 );
session_start();

include('dbh.php');

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";

$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)) {
	echo "Your username or password is incorrect!!";
} else {
	$_SESSION['id']=$row['id'];
	$_SESSION['last']=$row['last'];
	header("Location: index.php");
}
