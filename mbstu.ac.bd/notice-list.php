<?php

include('config/connection.php');

$select = "SELECT * FROM notice ORDER BY id DESC";
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
        <div class="row">
            <div class="col-md-12 notice_lists">
                <div class="heading">
                    <h4>All Notices</h4>
                </div>
                <ul class="list-group">
                <?php if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()) {
                            $id=$row['id'];
                            $heading = $row['notice_heading'];
                            $date = $row['notice_date'];
                            ?>
                        <li  class="list-group-item notice">
                            <h5>Date:<?php echo $date; ?> </h5>
                            <a href="events.php?table=events&id=<?php echo $id;?>"><h4><?php echo $heading; ?></h4></a>
                        </li>
                    <?php } ?>
                <?php } ?>
                </ul>
                <div class="pager">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
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