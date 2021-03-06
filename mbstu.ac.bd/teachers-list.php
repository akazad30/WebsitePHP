<?php
session_start();
if(!$_SESSION['pass']){
    header('location:T_S_O_login.php');
}
?>
<?php
include('config/connection.php');

    $select = "SELECT * FROM teacher";
    $result = $conn->query($select);
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
        <div id="page-wrapper">
            <div class="container">
                <a href="tso-logout.php"><button style="margin-right: 61px;float: right;margin-top: 15px;margin-bottom: -10px;padding: 6px 5px;" id="btn3" class="view_pro btn btn-default">Logout Here</button></a>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div style="margin-bottom: 15px;" class="col-md-12">
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead align="center">
                                    <tr>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>View</th>
                                        <th>Edite</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    while($row = mysqli_fetch_array($result)){
                                        $name = $row['name'];
                                        $designation=$row['designation'];
                                        $email=$row['email'];
                                        $pass=$row['password'];
                                        $id = $row['id'];
                                        ?>
                                        <tr >
                                            <td align="center"><?php echo $name   ?></td>
                                            <td align="center"><?php echo $designation   ?></td>
                                            <td align="center"><a href="teacher-profile-view.php?id=<?php echo $id; ?>"><button id="btn3" class="view_pro btn btn-default">View</button></a></td>
                                            <?php if($_SESSION['email']==$email&&$_SESSION['pass']==$pass){?>
                                            <td align="center"><a href="teacher-profile-update.php?id=<?php echo $id;?>"><button id="btn3" class="view_pro btn btn-default">Update</button></a>
                                                <?php }else{ ?>
                                            <td align="center"><button name="update" id="btn3" class="disabled view_pro btn btn-default">Update</button>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php  }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>

    <?php include('templates/small-footer.php') ?>
</div>
<!--Script-->
<?php include('config/footerjs.php')?>
</body>
</html>
