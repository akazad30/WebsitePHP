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
    <style>
        table{margin: 20px 0px}
        ul{list-style:square;}
    </style>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div>
    <?php include('templates/navigation-without-logo.php') ?>

    <div class="container">
        <div style="background: #fff;margin: 15px 0px;padding: 15px;" class="row">
            <div style="margin: 15px 0px 0px 0px" class="col-md-12 all_student_heading">
                <div class="heading">
                    <h4>Notices</h4>
                </div>
            </div>
            <div class="col-md-12 notice_area">
                <div class="notice_head">
                    <h3>This is notice Heading</h3>
                    <h4>Date: 20-08-2012</h4>
                </div>
                <div style="font-size: 15px;text-align: justify;" class="notice_body">

                </div>
            </div>
        </div>
    </div>
    <?php include('templates/small-footer.php') ?>
    <script>
        $("#th").hide();
        $(document).ready(function(){
            $("table").addClass("table table-striped table-bordered");
            $("img").addClass("img-responsive");
            $("p").css("text-align","justify");
            $("li").css("margin","5px 0px");
        });
    </script>
</div>





<!--Script-->
<?php include('config/footerjs.php')?>
</body>
</html>
