<?php

$host = 'localhost';
$user = 'root';
$pwd = '';
$db = 'court_case_management';

$con = mysqli_connect($host, $user, $pwd, $db);

if ($con->connect_errno) {
    die("Connection failed: " . $con->connect_error);
}

?>
