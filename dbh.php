<?php

$hostname = "localhost";
$user = "root";
$pwd = "root";
$database = "crud";


$conn = mysqli_connect($hostname, $user, $pwd, $database) or die ("could not connect to mysql");

if (mysqli_connect_errno($conn)) {
		echo mysqli_connect_errno($conn) . ' : ' . mysqli_connect_error($conn);
		//mysql_connect_error使うとSQLインジェクションの危険性があるらしいので、テスト用だけに使うこと
 }
$conn->set_charset('utf8');
