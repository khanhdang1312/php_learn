<?php
function cutArray(){
    $userArray = $_POST["user-array"];
    $userLimit = $_POST["user-limit"];
    $userArray = explode(",", $userArray);
    if (is_numeric($userLimit) && is_array($userArray)) {
        for ($i = 0; $i < count($userArray); $i += $userLimit) {
            echo "[";
            for ($j = $i; $j <= $i+$userLimit-1; $j++) {
                if ($j>count($userArray)-1){
                    continue;
                }else{
                    echo $userArray[$j];
                }
            }
            echo "]" . " ";
        }
    } else {
        echo "value is not correct";
    }
}
cutArray();

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
    <input type="text" name="user-array" class="form-control" placeholder="Enter your item, add ',' betwwen item">
    <input type="text" name="user-limit" class="form-control" placeholder="Enter a limit">
    <button type="submit" class="btn btn-success">Check</button>
</form>
</body>
</html>
