
<?php
include('config/connection.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $select = "SELECT * FROM officestaff where id='$id'";
    $result = $conn->query($select);
    $row= mysqli_fetch_assoc($result);
    $name=$row['name'];
    $designation=$row['designation'];
    $gender=$row['gender'];
    $dob=$row['dob'];
    $bg=$row['bg'];
    $religion=$row['religion'];
    $nationality=$row['nationality'];
    $current_address=$row['current_address'];
    $permanent_address=$row['permanent_address'];
    $contact=$row['contact_no'];
    $email=$row['email'];
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
                        <h4><?php echo $name;?>Profile</h4>
                    </div>
                </div>
                <div class="col-md-12 user_profile_review">
                    <div class="col-md-2 pro_pic">
                        <img src="http://placehold.it/150x150">
                    </div>
                    <div class="col-md-8">
                        <h3 class="user_name"><?php echo $name;?></h3>
                        <h5>Contact:<?php echo $contact;?></h5>
                        <h5>Designation: <?php echo $designation;?></h5>
                    </div>
                    <div class="col-md-2">
                        <a href="officestaff-profile-update.php?id=<?php echo $id;?>"><button id="edit" class="view_pro">Edit Profile Information</button></a>
                    </div>
                </div>

                <div class="col-md-12 user_profile_details">
                    <h4>Personal Information</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th class="tblhead">Name: </th>
                                <td><?php echo $name;?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Designation: </th>
                                <td><?php echo $designation;?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Gender: </th>
                                <td><?php echo $gender;?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Date Of Birth: </th>
                                <td><?php echo $dob;?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Blood Group: </th>
                                <td><?php echo $bg;?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Religion: </th>
                                <td><?php echo $religion;?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Nationality: </th>
                                <td><?php echo $nationality;?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Current Address: </th>
                                <td><?php echo $current_address;?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Permanent Address: </th>
                                <td><?php echo $permanent_address;?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Contact No: </th>
                                <td><?php echo $contact;?></td>
                            </tr>
                            <tr>
                                <th class="tblhead">Email:  </th>
                                <td><?php echo $email;?></td>
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
