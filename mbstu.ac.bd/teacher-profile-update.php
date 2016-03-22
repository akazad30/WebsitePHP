<?php
session_start();
if(!$_SESSION['pass']){
    header('location:T_S_O_login.php');
}
?>
<?php
include('config/connection.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $select = "SELECT * FROM teacher where id=$id";
    $result = $conn->query($select);
    $row= mysqli_fetch_assoc($result);
    $teacher_name=$row['name'];
    $teacher_designation=$row['designation'];
    $teacher_gender=$row['gender'];
    $teacher_dob=$row['dob'];
    $teacher_bg=$row['bg'];
    $teacher_religion=$row['religion'];
    $teacher_nationality=$row['nationality'];
    $teacher_current_address=$row['current_address'];
    $teacher_permanent_address=$row['permanent_address'];
    $teacher_contact=$row['contact_no'];
    $teacher_email=$row['email'];
    $teacher_password=$row['password'];
}
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $designation=$_POST['designation'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $bg=$_POST['bg'];
    $religion=$_POST['religion'];
    $nationality=$_POST['nationality'];
    $current_address=$_POST['current_address'];
    $permanent_address=$_POST['permanent_address'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $id=$_POST['id'];
    $update="UPDATE teacher SET name='$name',email='$email',password='$password',dob='$dob',bg='$bg',current_address='$current_address',permanent_address='$permanent_address',nationality='$nationality',contact_no='$contact',designation='$designation',gender='$gender',religion='$religion' WHERE id=$id ";
    $conn->query($update);
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

    <div style="" class="container">
        <div class="col-md-3"></div>
        <div style="background: #fff;padding: 15px;margin-top: 20px;margin-bottom: 30px;" class="col-md-6">
            <div class="col-md-12">
                <a href="tso-logout.php"><button style="float: right;margin-top: 0px;margin-bottom: 5px;padding: 6px 5px;" id="btn3" class="view_pro btn btn-default">Logout Here</button></a>
            </div>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" role="form">
                <div class="col-md-12">
                    <h4 class="heading" style="text-align: center;padding:10px;color:#fff"><?php echo $teacher_name?></h4>
                </div>
                <div class="form-group">
                    <label for="events_heading">Name:</label>
                    <input name="name" type="text" class="form-control" id="events_heading" value="<?php echo $teacher_name;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Designation:</label>
                    <input name="designation" type="text" class="form-control" id="events_heading" value="<?php echo $teacher_designation;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Gender:</label>
                    <input name="gender" type="text" class="form-control" id="events_heading" value="<?php echo $teacher_gender;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Date of Barth:</label>
                    <input name="dob" type="text" class="form-control" id="events_heading" value="<?php echo $teacher_dob;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Blood Group:</label>
                    <input name="bg" type="text" class="form-control" id="events_heading" value="<?php echo $teacher_bg;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Religion:</label>
                    <input name="religion" type="text" class="form-control" id="events_heading" value="<?php echo $teacher_religion;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Nationality:</label>
                    <input name="nationality" type="text" class="form-control" id="events_heading" value="<?php echo $teacher_nationality;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Current Address:</label>
                    <input name="current_address" type="text" class="form-control" id="events_heading" value="<?php echo $teacher_current_address;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Permanent Address:</label>
                    <input name="permanent_address" type="text" class="form-control" id="events_heading" value="<?php echo $teacher_permanent_address;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Contact No:</label>
                    <input name="contact" type="text" class="form-control" id="events_heading" value="<?php echo $teacher_contact;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Email:</label>
                    <input name="email" type="text" class="form-control" id="events_heading" value="<?php echo $teacher_email;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Password:</label>
                    <input name="password" type="text" class="form-control" id="events_heading" value="<?php echo $teacher_password;?>">
                </div>
                <div class="form-group">
                    <input name="id" type="hidden" class="form-control" id="events_id" value="<?php echo $id;?>">
                </div>

                <button id="btn2" name="submit" type="submit" class="view_pro btn btn-default">Save</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
    <?php include('templates/small-footer.php') ?>
</div>

<!--Script-->
<?php include('config/footerjs.php')?>
</body>
</html>
