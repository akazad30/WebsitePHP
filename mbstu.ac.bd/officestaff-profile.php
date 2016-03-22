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
            <div class="col-md-12 user_profile_heading">
                <div class="heading">
                    <h4>Student Profile</h4>
                </div>
            </div>
            <div class="col-md-12 user_profile_review">
                <div class="col-md-2 pro_pic">
                    <img src="http://placehold.it/150x150">
                </div>
                <div class="col-md-8">
                    <h3 class="user_name">Mr. Jon Doe</h3>
                    <h5>Contact: 01778000000</h5>
                    <h5>Email: Email@MySite.com</h5>
                </div>
                <div class="col-md-2">
                    <button id="edit" class="view_pro">Edit Profile Information</button>
                </div>
            </div>

            <div class="col-md-12 user_profile_details">
                <h4>Personal Information</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th class="tblhead">Name: </th>
                                <td>Mr. John Doe</td>
                            </tr>
                            <tr>
                                <th class="tblhead">Designation: </th>
                                <td>Lecturer</td>
                            </tr>
                            <tr>
                                <th class="tblhead">Gender: </th>
                                <td>Male</td>
                            </tr>
                            <tr>
                                <th class="tblhead">Date Of Birth: </th>
                                <td>01/01/1990</td>
                            </tr>
                            <tr>
                                <th class="tblhead">Blood Group: </th>
                                <td>B Positive</td>
                            </tr>
                            <tr>
                                <th class="tblhead">Religion: </th>
                                <td>Islam</td>
                            </tr>
                            <tr>
                                <th class="tblhead">Nationality: </th>
                                <td>Bangladeshi</td>
                            </tr>
                            <tr>
                                <th class="tblhead">Current Address: </th>
                                <td>Bangladeshi</td>
                            </tr>
                            <tr>
                                <th class="tblhead">Permanent Address: </th>
                                <td>Bangladeshi</td>
                            </tr>
                            <tr>
                                <th class="tblhead">Contact No: </th>
                                <td>+8801778000000</td>
                            </tr>
                            <tr>
                                <th class="tblhead">Email:  </th>
                                <td>Email@MySite.com</td>
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
