<?php
$firstName = $lastName = $email = $gende = $hobbies = $stage = "";
$firstNameErr = $lastNameErr = $emailErr = $gendeErr = $hobbiesErr = $stageErr = $formSuccess = $formErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["first-name"])) {
        $firstNameErr = "This felid don't empty";
    } else {
        $firstName = getData($_POST["first-name"]);
    }
    if (empty($_POST["last-name"])) {
        $lastNameErr = "This felid don't empty";
    } else {
        $lastName = getData($_POST["last-name"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "This felid don't empty";
    } else {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = getData($_POST["email"]);
        } else {
            $emailErr = "Please enter correct email form";
        }
    }
    if (empty($_POST["gender"])) {
        $gendeErr = "This felid don't empty";
    } else {
        $gende = getData($_POST["gender"]);
    }
    if (empty($_POST["state"])) {
        $stageErr = "This felid don't empty";
    } else {
        $stage = getData($_POST["state"]);
    }
    if (empty($_POST["hobbies"])) {
        $hobbiesErr = "This felid don't empty";
    } else {
        $hobbies = getData($_POST["hobbies"]);
    }
    if (empty($firstNameErr) && empty($lastNameErr) && empty($emailErr) && empty($gendeErr) && empty($stageErr) && empty($hobbiesErr)) {

        $formSuccess = "Regsiter Success";

    } else {

        $formErr = "Regsiter Failed";

    }

}
if(isset($_POST["reset"])){
    $firstName=$lastName=$gende=$email=$stage=$hobbies="";
}
function getData($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

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
    <style>
        .err {
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-7 col-lg-7">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET"
                  class="form-group border rounded">

                <h4 class="text-center bg-light border-bottom">Registration Form</h4>

                <div class="form-left-content p-3">

                    <label>First Name</label>
                    <input type="text" name="first-name" class="form-control mt-3" value="<?=$firstName?>">
                    <span class="err"><?php echo $firstNameErr ?></span><br>
                    <label>Last Name</label>
                    <input type="text" name="last-name" class="form-control mt-3" value="<?=$lastName?>">
                    <span class="err"><?php echo $lastNameErr ?></span><br>
                    <label>Email</label>
                    <input type="email" name="email" class="form-control mt-3" value="<?=$email?>">
                    <span class="err"><?php echo $emailErr ?></span><br>

                    <label>Gender</label>
                    <input type="radio" name="gender" value="male" <?php if(isset($gende)&&$gende=="male"){echo "checked";}?>>
                    <label>Male</label>
                    <input type="radio" name="gender" value="female" <?php if(isset($gende)&&$gende=="female"){echo "checked";}?>>
                    <label>Female</label>
                    <span class="err"><?php echo $gendeErr ?></span><br>

                    <label>States</label>
                    <br><br>
                    <select name="state" <?php if (isset($stage)){echo "value="."$stage";}?>>
                        <option value="Johor">Johor</option>
                        <option value="Japan">Japan</option>
                        <option value="Vietnamese">Vietnamese</option>
                        <option value="China">China</option>
                    </select>
                    <span class="err"><?php echo $stageErr ?></span>
                    <br><br>
                    <label>Hobbies</label>
                    <br><br>
                    <input type="checkbox" value="badminton" name="hobbies" <?php if(isset($hobbies)&&$hobbies=="badminton"){echo "checked";}?>>
                    <label>Badminton</label>
                    <input type="checkbox" value="football" name="hobbies" <?php if(isset($hobbies)&&$hobbies=="football"){echo "checked";}?>>
                    <label>Football</label>
                    <input type="checkbox" value="Bicyle" name="hobbies" <?php if(isset($hobbies)&&$hobbies=="Bicyle"){echo "checked";}?>>
                    <label>Bicyle</label>
                    <span class="err"><?php echo $hobbiesErr ?></span>
                    <br><br>

                    <button class="btn btn-info">Save Record</button>
                    <button type="submit" class="btn btn-outline-danger" value="reset" name="reset">Reset</button>

                </div>

            </form>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 rounded p-0">
            <div class="border">

                <h4 class="text-center bg-light border-bottom">Feature</h4>

                <div class="right-content p-3">

                    <h5> Special title treatment</h5>

                    <p>With suporting text below as natural lead-in to addtional content</p>

                    <button class="btn btn-info">Go somewhere</button>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-12 col-md-12">
            <?= "<p class='text-danger'>$formErr</p>" ?>
            <?= "<p class='text-success'>$formSuccess</p>" ?>
            <h1 class="text-center">Your Infor :</h1>
            <p>Name: <?= $firstName . " " . $lastName ?></p>
            <p>Gender:<?= $gende ?></p>
            <p>Hobbies: <?= $hobbies ?></p>
            <p>State: <?= $stage ?></p>
            <p>Email: <?= $email ?></p>
        </div>
    </div>
</div>
</body>
</html>