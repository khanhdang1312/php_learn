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
    <input type="text" name="user-data" class="form-control" placeholder="Enter your strings">
    <button type="submit" class="btn btn-success">Check</button>
</form>
<?php
function reverse($str)
{
    if (is_numeric($str)) {
        $strev = "";
        $str = strval($str);
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            if (intval($str) < 0) {
                $strev .= $str[$i];
                $strev = str_replace("-", "", $strev);
            } else {
                echo $str[$i];
            }
        }
        if (intval($strev)) {
            echo "-" . $strev;
        }
    } else {
        echo "value is not a number";
    }
}

reverse($_POST["user-data"]);
?>
</body>
</html>
