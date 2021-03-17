<?php
session_start();
echo "Login success!"."<br>";
echo "Your user name:".$_SESSION['name']."<br>";
echo "Your password:".$_SESSION['password']."<br>";
session_unset();
session_destroy();
?>
