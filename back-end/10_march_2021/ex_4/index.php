<?php
$result="";
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/bs/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="p-5 form-group">

                <h4 class="pt-3 pb-3 bg-light border-bottom">Thực Hành Toán Tử</h4>

                <input type="number" name="first-num" class="form-control mt-3" placeholder="First Number">
                <input type="number" name="last-num" class="form-control mt-3" placeholder="Last Number">
                <br>
                <button type="submit" class="btn btn-success" name="sum">a+b</button>
                <button type="submit" class="btn btn-info" name="difference">a-b</button>
                <button type="submit" class="btn btn-danger" name="multiply">a*b</button>
                <button type="submit" class="btn btn-warning" name="divide">a/b</button>

            </form>
        </div>
        <div class="col-12 col-sm-12 col-md-3 col-lg-3"></div>
    </div>
</div>
</body>
</html>
<?php
$firstNum=$_POST["first-num"];
$lastNum=$_POST["last-num"];
if (!is_numeric($firstNum)||!is_numeric($lastNum)){
    $result="Value is not number";
}else{
   if(isset($_POST["sum"])){
       $result=$firstNum+$lastNum;
   }if(isset($_POST["difference"])){
       $result=$firstNum-$lastNum;
   }if(isset($_POST["multiply"])){
       $result=$firstNum*$lastNum;
   }if(isset($_POST["divide"])) {
        $result = $firstNum / $lastNum;
    }
}
?>
<p class="text-info text-center"><?=$result ?></p>

