<?php
session_start();
?>
<?php
include('config/connection.php');

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $q="SELECT   *FROM login  WHERE username='$username' AND password='$password' ";
    $r=$conn->query($q);
    if(mysqli_num_rows($r)>0){
        $_SESSION['pass']=$password;
        $_SESSION['username']=$username;
        echo "<script>window.open('pages/dashboard.php','_self') </script>";
    }else {
        echo "<script>alert('Password or email is incarect')</script>";
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
                    <form action="login.php" method="post" data-toggle="validator" role="form">
                        <div class="login_panel panel panel-default">
                            <div class="heading">
                                <h4>Login Here (Main Admin)</h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="inputName" class="control-label">User Name</label>
                                    <input name="username" type="text" class="form-control" id="inputName" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="control-label">Password</label>
                                    <input name="password" type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                                    <span class="help-block">Minimum of 6 characters</span>
                                </div>
                                <div class="form-group">
                                    <button name="submit" type="submit" class="login_btn btn">Login</button>
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
