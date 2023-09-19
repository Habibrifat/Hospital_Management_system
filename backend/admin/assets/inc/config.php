<?php
$dbuser="root";
$dbpass="";
$host="localhost";
$db="hmisphp";
$mysqli=new mysqli($host,$dbuser, $dbpass, $db);

// Check for connection errors
if ($mysqli->connect_errno) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>
