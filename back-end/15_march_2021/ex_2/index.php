<?php
session_start();
$Cname=$Cpass="";
if (isset($_COOKIE['name'])&&isset($_COOKIE['pass'])){
    $Cname=$_COOKIE['name'];
    $Cpass=$_COOKIE['pass'];
    echo "Hệ thống sẽ đăng nhập vui lòng đợi 1 chút!";
    header('Refresh:2;url="auto-login.php',true,303);
}
if (isset($_SESSION['name'])){
    echo "Vui lòng logout để sử dụng tính năng này!";
    header('Refresh:2;url="auto-login.php',true,303);
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="check-login.php" method="post">

    <label>Name<br><input type="name" name="Name" value="<?=$Cname?>"></label>
    <label><br>Password<br><input type="password" name="Password" value="<?=$Cpass?>"><br></label>
    <label><input type="checkbox" name="remember">Remember Me!</label>
    <input type="submit" name="check-login" value="submit">

</form>
</body>
</html>
