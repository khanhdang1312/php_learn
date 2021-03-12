<?php
$userName = $userEmail = $userPhone = $userWebsiteLink = $userMessage = "";
$Err = "";
$check = "true";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["user-name"], $_POST["user-email"], $_POST["user-number-phone"], $_POST["user-website-link"])) {

        $Err = "This filed can't empty";

    } else {

        if (filter_var($_POST["user-email"], FILTER_VALIDATE_EMAIL)) {
            $userEmail = getData($_POST["user-email"]);
        }
        if (filter_var($_POST["user-number-phone"], FILTER_SANITIZE_NUMBER_INT)) {
            $userPhone = getData($_POST["user-number-phone"]);
        }
        if (filter_var($_POST["user-website-link"], FILTER_VALIDATE_URL)) {
            $userWebsiteLink = getData($_POST["user-website-link"]);
        }
    }
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
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-ms-3 col-md-3 col-lg-3"></div>
        <div class="col-12 col-ms-6 col-md-6 col-lg-6 p-5">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"
                  class="p-4 bg-light form-group ">

                <input type="text" name="user-name" class="form-control mt-3" placeholder="Your Name">
                <input type="email" name="user-email" class="form-control mt-3" placeholder="Your Email Address">
                <input type="number" name="user-number-phone" class="form-control mt-3" placeholder="Your Phone Number">
                <input type="url" name="user-website-link" class="form-control mt-3"
                       placeholder="Your WebSite Start With">
                <textarea name="user-message" rows="4" cols="10" class="btn-block mt-3"
                          placeholder="Describe yourself here..."></textarea>
                <span class="text-danger"><?= $Err ?></span>
                <button class="btn btn-danger btn-block mt-3">Sign of</button>

            </form>

        </div>
        <div class="col-12 col-ms-3 col-md-3 col-lg-3"></div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <div class="Your info">

                <?php
                if ($check == "true") {
                    echo "<h1>Your Infor:</h1>";
                    echo "<p>Name: $userName</p>";
                    echo "<p>Email: $userEmail</p>";
                    echo "<p>Phone: $userPhone</p>";
                    echo "<p>WebSiteLink: $userWebsiteLink</p>";
                    echo "<p>Message: $userMessage</p>";
                } else {
                    echo $Err;
                }
                ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>