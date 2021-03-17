<?php
function demo()
{
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $string = $_POST["user-string"];
        $string = explode(" ", $string);
        for ($i = 0; $i < count($string); $i++) {
            for ($j = 0; $j < strlen($string[$i]); $j++) {
                 $string[$i][0]=strtoupper($string[$i][0]);
                break;
            }
            echo $string[$i]." ";
        }

    }
}
demo();
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
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <input type="text" name="user-string" class="form-control" placeholder="Enter your item, add ',' betwwen item"
           value="<?php echo"";?>">
    <button type="submit" class="btn btn-success">Check</button>
</form>
</body>
</html>
