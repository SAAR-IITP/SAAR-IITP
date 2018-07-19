<?php


$hostname = "localhost";
$username = "id6497535_root";
$password = "toon11";
$dbname = "id6497535_saar";

//making the connection to mysql

$dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die("could not connect to database, ERROR: ".mysqli_connect_error());

//set encoding

mysqli_set_charset($dbc, "utf8");

//echo "you are connected to ".$dbname." Database";

?>
