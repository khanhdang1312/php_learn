<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/bs/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <input type="text" name="user-string" class="form-control" placeholder="Enter your strings">
    <button type="submit" class="btn btn-success">Check</button>
</form>
<?php
function countWord($str)
{
    $countResult = array();
    if (empty($str)) {
        echo "<p>value is null</p>";
    }
    $str = explode(" ", $str);
    for ($i = 0; $i < count($str); $i++) {
        $count = 0;
        for ($j = 0; $j < $i + 1; $j++) {
            if ($str[$i] == $str[$j]) {
                ++$count;
                $countResult["$str[$i]"] = "$count";
            }
        }
    }
    ?>
    <table border="1px">
        <?php
        for ($i = 0; $i <2; $i++) {
            echo "<tr>";
            foreach ($countResult as $value =>$value_value){
                if (empty($value)){
                    echo "";
                }
                else if ($i==0){
                    echo "<td>$value</td>";
                }else{
                    echo "<td>$value_value</td>";
                }
            }
            echo"</tr>";
        }
        ?>
    </table>
    <?php
}

countWord($_POST["user-string"]);
?>
<p></p>
</body>
</html>
