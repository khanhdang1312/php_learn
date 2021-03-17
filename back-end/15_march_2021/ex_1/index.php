<?php
session_start();

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

    <h4>Login</h4>
    <form action="complete.php" method="POST">
        <label>Name</label><br>
        <input type="text" name="user-name" placeholder="Your Name" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="Your Password" required><br>
        <button type="submit" name="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $_SESSION['name']=$_POST['user-name'];
    $_SESSION['password']=$_POST['password'];
}
?>
</body>
</html>
