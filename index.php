<?php
// Include includes and create variable for dbconn and preparing php code
include_once 'includes.php';
$pdo = pdo_connect_mysql();

//Code below will be used to route to different pages
//Page set to home.php by default
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include and show the requested page
include $page . '.php';
?>

