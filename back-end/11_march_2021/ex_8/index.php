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
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <input type="text" name="first-string" class="form-control" placeholder="Enter your item, add ',' betwwen item"
           value="<?php echo"";?>">
    <input type="text" name="last-string" class="form-control" placeholder="Enter your item, add ',' betwwen item">
    <button type="submit" class="btn btn-success">Check</button>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    function checkWord($firstString,$lastString){
        if (strlen($firstString)!==strlen($lastString)){
            return false;
        }else{
            for ($i=0;$i<strlen($firstString);$i++){
                for ($j=0;$j<strlen($firstString);$j++){
                    if ($firstString[$i]===$firstString[$j]){
                        return true;
                    }else{
                        return false;
                    }
                }
            }
        }
    }
    function main(){
        $result=checkWord($_POST["first-string"],$_POST["last-string"]);
        if ($result){
            echo "string is an Anagram";
        }else{
            echo "string is not an Anagram";
        }
    }

}

?>
</body>
</html>