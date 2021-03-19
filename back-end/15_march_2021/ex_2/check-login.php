<?php
$myName="camnh";
$myPass="123456";
$name=$_POST['Name'];
$pass=$_POST['Password'];
session_start();
if (isset($_POST['check-login'])){
    if ($name===$myName&&$pass===$myPass){
        if (isset($_POST['remember'])){
            setcookie('name',$myName,time()+30);
            setcookie('pass',$myPass,time()+30);
        }
        session_start();
        $_SESSION['name']=$myName;
        header('location:login-success.php');
    }else{
        echo "Login failed";
        echo "<a href='index.php'>Try Again</a>";
    }
}