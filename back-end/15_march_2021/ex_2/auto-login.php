<?php
session_start();
$_SESSION['name']=$_COOKIE['name'];
$_SESSION['name']='camnh';
header('location:login-success.php');
