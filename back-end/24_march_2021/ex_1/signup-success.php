<?php
session_start();
//require "connect.php";
$_SESSION['$nameErr'] = "";
if (isset($_POST['save'])) {
    if (empty($_POST['staff-name'])) {
        $_SESSION['$nameErr'] = "Trường này không được để trống";
        header("location:signup.php");

    } else {
        $serverName = "localhost";
        $userServerName = "root";
        $userServerPass = "";
        $dbName = "php_learn";
        $conn =new mysqli($serverName, $userServerName, $userServerPass, $dbName);
        $staffName = $_POST['staff-name'];
        $staffDes = $_POST['staff_des'];
        $staffSalary = $_POST['staff-salary'];
        $staffGender = $_POST['staff_gender'];
        $staffBirthday = $_POST['staff_birthday'];
        $date = date('Y-m-d h:i:sa');
        $createAt = "DATE '$date'";
        $sql ="SELECT *FROM staff";
    }
}


