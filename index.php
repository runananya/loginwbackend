<?php
session_start();
$_SESSION;

include("connection.php");
include("functions.php");
$username=check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">LOGOUT</a>
    <h1>This is index page</h1>
    <br>
    <h2>hello username</h2>
</body>
</html>