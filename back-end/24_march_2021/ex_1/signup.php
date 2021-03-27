<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset=">">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../bootstrap/bs/css/bootstrap.min.css">
    <title>ADD STAFF</title>
</head>
<body>
<div class="container p-5">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h1>Create Staff</h1>
            <form action="signup-success.php" method="post">

                <label>Name<span class="text-danger">*</span></label><br>
                <input type="text" name="staff-name" class="form-control">
                <span class="text-danger"><?=$_SESSION['$nameErr'] ?></span><br>
                <label>Description</label>
                <textarea class="form-control" name="staff_des" required></textarea>
                <label>Salary</label>
                <input type="text" name="staff-salary" class="form-control" required>
                <label>Gender</label><br>
                <input type="radio" name="staff_gender" value="male"><label>Male</label>
                <input type="radio" name="staff_gender" value="female"><label>Female</label><br>
                <label>Birthday</label>
                <input type="date" name="staff_birthday" class="form-control" required><br>
                <button type="submit" name="save" class="btn btn-info">Save</button>
                <button type="submit" name="save" class="btn btn-danger"><a href="staff_editor.php" class="text-white">cancel</a>
                </button>
            </form>

        </div>
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
    </div>
</div>
</body>
</html>
