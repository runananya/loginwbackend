<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login_sampledb";

if(!$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("failed to connect!");
};
?>
