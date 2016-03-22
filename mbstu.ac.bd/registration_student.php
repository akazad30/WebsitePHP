<?php
include('config/connection.php');
if(isset($_POST['submit'])){
    $firstname = $_POST['fn'];
    $lastname = $_POST['ln'];
    $student_id = $_POST['sudent_id'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $semester = $_POST['user-role'];
    $dob = $_POST['dob'];
    $cheack_email="SELECT *FROM cheackemail where email='$email' ";
    $result=$conn->query($cheack_email);
    if(mysqli_num_rows($result)>0){
        echo "<script> alert('This Email or Student ID is already registered ') </script>";
    }else{
        $tempreg = "INSERT INTO temp_student(fn,ln,id_no,email,password,bd,semester) VALUES ('$firstname','$lastname','$student_id','$email','$pass','$dob','$semester')";
        $conn->query($tempreg);
        $cheack = "INSERT INTO cheackemail(email) VALUES ('$email')";
        $conn->query($cheack);
        echo "<script> alert(' Registration Successfull') </script>";
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
                <div class="col-md-3"></div>
                <div class="col-md-6 login_form">
                    <form method="post" action="registration_student.php" data-toggle="validator" role="form">
                        <div class="login_panel panel panel-default">
                            <div class="heading">
                                <h4>Registration Here (Student)</h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="inputFirstName" class="control-label">First Name</label>
                                    <input name="fn" type="text" class="form-control" id="inputFirstName" placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputLastName" class="control-label">Last Name</label>
                                    <input name="ln" type="text" class="form-control" id="inputFirstName" placeholder="Last Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputStudentID" class="control-label">Student ID (Only For Students)</label>
                                    <input name="sudent_id" type="text" name="student-id" class="form-control" id="inputStudentID" placeholder="CEXXXXX" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="control-label">Email</label>
                                    <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Email Address Is Invalid" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="inputPassword" class="control-label">Password</label>
                                        <input name="pass" type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                                        <span class="help-block">Minimum of 6 characters</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPasswordConfirm" class="control-label">Re-Type Password</label>
                                        <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Password Doesn't Match" placeholder="Confirm Password" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-md-12">
                                        <label for="" class="control-label">Select Year & Semester:</label><br>
                                        <select id="user-role" name="user-role">
                                            <option value="11">1st year 1st semester</option>
                                            <option value="12">1st year 2nd semester</option>
                                            <option value="21">2nd year 1st semester</option>
                                            <option value="22">2nd year 2nd semester</option>
                                            <option value="31">3rd year 1st semester</option>
                                            <option value="32">3rd year 2nd semester</option>
                                            <option value="41">4th year 1st semester</option>
                                            <option value="42">4th year 2nd semester</option>
                                        </select>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <br><br><div class="form-group col-md-3">
                                        <label for="" class="control-label">Date Of Birth:</label>
                                        <input type="text" class="form-control" id="date" name="dob" required><br />
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" name="submit" class="login_btn btn">Complete Registration</button>
                                </div>
                                <div style="margin-top: 15px;" class="form-group col-md-12">
                                    <label for="" class="control-label">Already A Registered Member?</label>
                                    <a href="T_S_O_login.php">Click Here For Login.</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>

    <?php include('templates/small-footer.php') ?>
</div>

<!--Script-->
<?php include('config/footerjs.php')?>
</body>
</html>
