<?php
session_start();
?>
<?php
include('config/connection.php');
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = $_POST['user-role'];

    if($user=="students"){
        $q = "SELECT   *FROM tsologin  WHERE email='$email' AND password='$password' ";
        $r = $conn->query($q);

        if (mysqli_num_rows($r) > 0) {
            $_SESSION['pass'] = $password;
            $_SESSION['email'] = $email;
            echo "<script>window.open('all-semester-students.php','_self') </script>";
        } else {
            echo "<script>alert('Password or Email is incorrect')</script>";
             }
    }else if($user=="teacher"){
        $q = "SELECT   *FROM teacher  WHERE email='$email' AND password='$password' ";
        $r = $conn->query($q);

        if (mysqli_num_rows($r) > 0) {
            $_SESSION['pass'] = $password;
            $_SESSION['email'] = $email;
            echo "<script>window.open('teachers-list.php','_self') </script>";
        } else {
            echo "<script>alert('Password or Email is incorrect')</script>";
        }
    }else if($user=="officestaff"){
        $q = "SELECT   *FROM officestaff  WHERE email='$email' AND password='$password' ";
        $r = $conn->query($q);

        if (mysqli_num_rows($r) > 0) {
            $_SESSION['pass'] = $password;
            $_SESSION['email'] = $email;
            echo "<script>window.open('officestaff-list.php','_self') </script>";
        } else {
            echo "<script>alert('Password or Email is incorrect')</script>";
        }
    }
}
?>

<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
<![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="">
<![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="">
<![endif]-->
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('config/css.php') ?>
    <?php include('config/headerjs.php') ?>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div>
    <?php include('templates/navigation-without-logo.php') ?>

    <div class="container">
        <div class="row">
            <div class="login_form_area">
                <div class="col-md-4"></div>
                <div class="col-md-4 login_form">
                    <form action="T_S_O_login.php" method="post" data-toggle="validator" role="form">
                        <div class="login_panel panel panel-default">
                            <div class="heading">
                                <h4>Login Here (Members)</h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="inputEmail" class="control-label">Email</label>
                                    <input name="email" type="email" class="form-control" id="inputName" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="control-label">Password</label>
                                    <input name="password" type="password" class="form-control" id="inputEmail" placeholder="Email" data-error="Email Address Is Invalid" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-md-12">
                                        <label for="" class="control-label">User as:</label>
                                        <select id="user-role" name="user-role">
                                            <option value="teacher">Teacher</option>
                                            <option value="students">Student</option>
                                            <option value="officestaff">Office Staff</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button style="margin-top: 15px;" name="submit" type="submit" class="login_btn btn">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>

    <?php include('templates/small-footer.php') ?>
</div>





<!--Script-->
<?php include('config/footerjs.php')?>
</body>
</html>
