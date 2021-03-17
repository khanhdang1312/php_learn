<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../bootstrap/bs/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <input type="text" name="user-string" class="form-control" placeholder="Enter your strings">
    <button type="submit" class="btn btn-success">Check</button>
</form>
<?php
    function isPalindrome($str){
        if (empty($str)){
            echo "value is null";
        }else{
            $str=strtolower($str);
           return $str===strrev($str);
        }
    }
    function main(){
        if (isPalindrome($_POST["user-string"])){
            echo "String is palinprome";
        }else{
            echo "string is not palinprome";
        }
    }
    main();
?>
</body>
</html>

