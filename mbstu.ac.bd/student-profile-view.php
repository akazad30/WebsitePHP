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
        <div class="user_profile_area col-md-12">
        <div class="row">
            <div class="col-md-12">
                <a href="tso-logout.php"><button style="float: right;margin-top: 0px;margin-bottom: 0px;padding: 6px 5px;" id="btn3" class="view_pro btn btn-default">Logout Here</button></a>
            </div>
            <div class="col-md-12 user_profile_heading">
                <div class="heading">
                    <h4><?php echo $student_name; ?> Profile</h4>
                </div>
            </div>
            <div class="col-md-12 user_profile_review">
                <div class="col-md-2 pro_pic">
                    <img src="http://placehold.it/150x150">
                </div>
                <div class="col-md-8">
                    <h3 class="user_name"><?php echo $student_name; ?></h3>
                    <h4><?php echo $student_id; ?></h4>
                    <h5>ID:<?php echo $student_id; ?></h5>
                    <h5>Contact: <?php echo $student_id; ?></h5>
                    <h5>Email: <?php echo $student_id; ?></h5>
                </div>
                <div class="col-md-2">
                    <a href="student-profile-update.php?id=<?php echo $id;?>"><button id="edit" class="view_pro">Edit Profile Information</button> </a>
                </div>
            </div>

            <div class="col-md-12 user_profile_details">
                <h4>Personal Information</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th class="tblhead">Student ID: </th>
                                <td><?php echo $student_id; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Name: </th>
                                <td><?php echo $student_name; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Gender: </th>
                                <td><?php echo $student_gender; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Date Of Birth: </th>
                                <td><?php echo $student_dob; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Year & Semester: </th>
                                <td><?php echo $student_year_semester; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Session: </th>
                                <td><?php echo $student_session; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Blood Group: </th>
                                <td><?php echo $student_bg; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Religion: </th>
                                <td><?php echo $student_religion; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Nationality: </th>
                                <td><?php echo $student_nationality; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Current Address: </th>
                                <td><?php echo $student_current_address; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Contact No: </th>
                                <td><?php echo $student_contact; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Email:  </th>
                                <td><?php echo $student_email; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br/><br/>
                <h4>Family & Contact Information</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th class="tblhead">Father's Name: </th>
                                <td><?php echo $father_name; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Contact No: </th>
                                <td><?php echo $father_contact; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Email: </th>
                                <td><?php echo $father_email; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Mother's Name: </th>
                                <td><?php echo $mothaer_name; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Contact No: </th>
                                <td><?php echo $mothaer_contact; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Email: </th>
                                <td><?php echo $mothaer_email; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Present Address:  </th>
                                <td><?php echo $present_address; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Permanent Address:  </th>
                                <td><?php echo $permanent_address; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Local Gardiun Name: </th>
                                <td><?php echo $localgardian_name; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Address:  </th>
                                <td><?php echo $localgardian_address; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Contact No: </th>
                                <td><?php echo $localgardian_contac; ?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Email: </th>
                                <td><?php echo $localgardian_email; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('templates/small-footer.php') ?>
</div>

<!--Script-->
<?php include('config/footerjs.php')?>
</body>
</html>
