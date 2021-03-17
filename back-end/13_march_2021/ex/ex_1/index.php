<?php
$check = "No file chose!";
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
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

    <label>Select a file to upload</label><br>
    <input type="file" name="img-file" placeholder="chose a file"><br>
    <span>Only Jpg,Jpeg,png and git file and file with 1 mb.</span>
    <br>
    <button type="submit" name="submit">Up load</button>
</form>
<?php

function checkUpLoad()
{
    $target = "uploads/";
    $target_file = $target . basename($_FILES["img-file"]["name"]);
    $upLoadOk = 1;
    $imgTypeFile = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["img-file"]["tmp_name"]);
        if ($check) {
            echo "File upload is an images -" . $check["mine"];
            $upLoadOk = 1;
        } else {
            echo "file is not an image";
            $upLoadOk = 0;
        }
    }
    if (file_exists($target_file)) {
        echo "file is already exits";
        $upLoadOk = 0;
    }
    if ($_FILES["img-file"]["size"] > 10000000) {
        echo "sorry ,your file is so large.";
        $upLoadOk = 0;
    }

    if ($imgTypeFile != "jpg" && $imgTypeFile != "png" && $imgTypeFile != "jpeg"
        && $imgTypeFile != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

if (isset($_POST["submit"])) {
    checkUpLoad();
}

?>
</body>
</html>