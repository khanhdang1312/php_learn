<?php
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
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
    <input type="text" name="user-month" class="form-control" placeholder="Enter your strings">
    <button type="submit" class="btn btn-success">Check</button>
</form>
<?php
    function daysIsMonths($month){
        if(empty($month)){
            echo "value is not empty";
        }
        else{
            if (strtotime($month)){
                $month=str_replace(" ","",$month);
                $m=strtotime($month);
                $m=date("m",$m);
                echo cal_days_in_month(CAL_GREGORIAN,$m,2021);
            }else{
                echo "value is not month";
            }
        }
    }
    daysIsMonths($_POST["user-month"]);
?>
</body>
</html>
