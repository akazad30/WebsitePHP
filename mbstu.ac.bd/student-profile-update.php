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

    $select = "SELECT * FROM students where id='$id'";
    $result = $conn->query($select);
    $row= mysqli_fetch_assoc($result);
    $student_id=$row['id_no'];
    $student_name=$row['name'];
    $student_gender=$row['gender'];
    $student_dob=$row['dob'];
    $student_year_semester=$row['year_semester'];
    $student_session=$row['session'];
    $student_bg=$row['bg'];
    $student_religion=$row['religion'];
    $student_nationality=$row['nationality'];
    $student_current_address=$row['current_address'];
    $student_contact=$row['contact_no'];
    $student_email=$row['email'];
    $father_name=$row['father_name'];
    $father_contact=$row['father_contact'];
    $father_email=$row['father_email'];
    $mothaer_name=$row['mother_name'];
    $mothaer_contact=$row['mother_contact'];
    $mothaer_email=$row['mother_email'];
    $present_address=$row['present_address'];
    $permanent_address=$row['permanent_address'];
    $localgardian_name=$row['local_gardiun_name'];
    $localgardian_address=$row['local_gardiun_address'];
    $localgardian_contac=$row['loacl_gardiun_contact'];
    $localgardian_email=$row['loacl_gardiun_email'];
    $password=$row['password'];
    $id=$row['id'];
    $semester_code=$row['semester'];
}
if(isset($_POST['submit'])) {
    $student_id=$_POST['id_no'];
    $student_name=$_POST['name'];
    $student_gender=$_POST['gender'];
    $student_dob=$_POST['dob'];
    $student_year_semester=$_POST['year_semester'];
    $student_session=$_POST['session'];
    $student_bg=$_POST['bg'];
    $student_religion=$_POST['religion'];
    $student_nationality=$_POST['nationality'];
    $student_current_address=$_POST['current_address'];
    $student_contact=$_POST['contact_no'];
    $student_email=$_POST['email'];
    $father_name=$_POST['father_name'];
    $father_contact=$_POST['father_contact'];
    $father_email=$_POST['father_email'];
    $mothaer_name=$_POST['mother_name'];
    $mothaer_contact=$_POST['mother_contact'];
    $mothaer_email=$_POST['mother_email'];
    $present_address=$_POST['present_address'];
    $permanent_address=$_POST['permanent_address'];
    $localgardian_name=$_POST['local_gardiun_name'];
    $localgardian_address=$_POST['local_gardiun_address'];
    $localgardian_contac=$_POST['loacl_gardiun_contact'];
    $localgardian_email=$_POST['loacl_gardiun_email'];
    $password=$_POST['password'];
    $id=$_POST['id'];
    $semester_code=$_POST['semester_code'];
    $update="UPDATE students SET id_no='$student_id',name='$student_name',gender='$student_gender',dob='$student_dob',year_semester='$student_year_semester',session='$student_session',bg='$student_bg',religion='$student_religion',nationality='$student_nationality',current_address='$student_current_address',contact_no='$student_contact',email='$student_email',father_name='$father_name',father_contact='$father_contact',father_email='$father_email',mother_name='$mothaer_name',mother_contact='$mothaer_contact',mother_email='$mothaer_email',present_address='$present_address',permanent_address='$permanent_address',local_gardiun_name='$localgardian_name',local_gardiun_address='$localgardian_address',loacl_gardiun_contact='$localgardian_contac',loacl_gardiun_email='$localgardian_email',password='$password',semester='$semester_code' WHERE id = $id ";
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
                    <h4 class="heading" style="text-align: center;padding:10px;color:#fff"><?php echo $student_name?></h4>
                </div>
                <div class="form-group">
                    <label for="events_heading">ID NO:</label>
                    <input name="id_no" type="text" class="form-control" id="events_heading" value="<?php echo $student_id;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Name:</label>
                    <input name="name" type="text" class="form-control" id="events_heading" value="<?php echo $student_name;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Gender:</label>
                    <input name="gender" type="text" class="form-control" id="events_heading" value="<?php echo $student_gender;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Date of Barth:</label>
                    <input name="dob" type="text" class="form-control" id="events_heading" value="<?php echo $student_dob;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Year & Semester:</label>
                    <input name="year_semester" type="text" class="form-control" id="events_heading" value="<?php echo $student_year_semester;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Semester Code:</label>
                    <input name="semester_code" type="text" class="form-control" placeholder="Ex: 11" id="events_heading" value="<?php echo $semester_code;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Session:</label>
                    <input name="session" type="text" class="form-control" id="events_heading" value="<?php echo $student_session;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Blood Group:</label>
                    <input name="bg" type="text" class="form-control" id="events_heading" value="<?php echo $student_bg;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Religion:</label>
                    <input name="religion" type="text" class="form-control" id="events_heading" value="<?php echo $student_religion;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Nationality:</label>
                    <input name="nationality" type="text" class="form-control" id="events_heading" value="<?php echo $student_nationality;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Current Address:</label>
                    <input name="current_address" type="text" class="form-control" id="events_heading" value="<?php echo $student_current_address;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Contact No:</label>
                    <input name="contact_no" type="text" class="form-control" id="events_heading" value="<?php echo $student_contact;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Email:</label>
                    <input name="email" type="text" class="form-control" id="events_heading" value="<?php echo $student_email;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Father's Name:</label>
                    <input name="father_name" type="text" class="form-control" id="events_heading" value="<?php echo $father_name;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Father's Contact No:</label>
                    <input name="father_contact" type="text" class="form-control" id="events_heading" value="<?php echo $father_contact;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Father's Email:</label>
                    <input name="father_email" type="text" class="form-control" id="events_heading" value="<?php echo $father_email;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Mother's Name:</label>
                    <input name="mother_name" type="text" class="form-control" id="events_heading" value="<?php echo $mothaer_name;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Mother's Contact No:</label>
                    <input name="mother_contact" type="text" class="form-control" id="events_heading" value="<?php echo $mothaer_contact;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Mother's Email:</label>
                    <input name="mother_email" type="text" class="form-control" id="events_heading" value="<?php echo $mothaer_email;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Present Address:</label>
                    <input name="present_address" type="text" class="form-control" id="events_heading" value="<?php echo $present_address;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Permanent Address:</label>
                    <input name="permanent_address" type="text" class="form-control" id="events_heading" value="<?php echo $permanent_address;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Local Gardiun Name:</label>
                    <input name="local_gardiun_name" type="text" class="form-control" id="events_heading" value="<?php echo $localgardian_name;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Local Gardiun Address:</label>
                    <input name="local_gardiun_address" type="text" class="form-control" id="events_heading" value="<?php echo $localgardian_address;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Local Gardiun Contact No:</label>
                    <input name="loacl_gardiun_contact" type="text" class="form-control" id="events_heading" value="<?php echo $localgardian_contac;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Local Gardiun Email:</label>
                    <input name="loacl_gardiun_email" type="text" class="form-control" id="events_heading" value="<?php echo $localgardian_email;?>">
                </div>
                <div class="form-group">
                    <label for="events_heading">Password:</label>
                    <input name="password" type="text" class="form-control" id="events_heading" value="<?php echo $password;?>">
                </div>
                <div class="form-group">
                    <input name="id" type="hidden" class="form-control" id="events_id" value="<?php echo $id;?>">
                </div>

                <a href="students-list.php"><button id="btn2" name="submit" type="submit" class="view_pro btn btn-default">Save</button></a>
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
