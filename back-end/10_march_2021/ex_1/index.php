<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/bs/css/bootstrap.min.css">
</head>
<body>
<div class="container p-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <?php
            $nameErr = $passErr = "";
            $userName = $passWord = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($userName) || empty($passWord)) {
                    if (empty($_POST["user-name"])) {
                        $nameErr = "this flied is require";
                    } else {
                        $userName = getData($_POST["user-name"]);
                    }
                    if (empty($_POST["user-password"])) {
                        $passErr = "this flied is require";
                    } else {
                        $passWord = getData($_POST["user-password"]);
                    }
                    if ($userName == "admin" && $passWord == "admin") {
                        echo "<h1 class='text-success text-center'>login success</h1>";
                    } else {
                        echo "<h1 class='text-danger text-center'>login failed</h1>";
                    }
                }
            }
            function getData($data)
            {
                $data = trim($data);
                $data = htmlspecialchars($data);
                $data = stripslashes($data);
                return $data;
            }

            ?>
            <form class="bg-light rounded border p-4" method="POST"
                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                <h5 class="text-center bg-success p-3 rounded">Sign in</h5>
                <input name="user-name" type="text" class="form-control p-3 mt-3" placeholder="User Name">
                <span class="nameErr"><?php echo $nameErr ?></span>
                <input name="user-password" type="password" class="form-control p-3 mt-3" placeholder="Password">
                <span class="nameErr"><?php echo $passErr ?></span>
                <button class="btn btn-success btn-block mt-3" type="submit">Login</button>
            </form>
            <?php
            echo "<h1>Your Input</h1>" . "<br>";
            echo "User Name: " . $userName;
            echo "Passwors: " . $passWord;
            ?>
        </div>
    </div>
</div>
</body>
</html>