<?php
session_start();
$_SESSION = [];
session_unset();
//Destroy the session
session_destroy(); //unset $_SESSION['user']

//Redirect to login page
header('location: index.php');
