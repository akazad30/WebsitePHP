<?php
include('config/connection.php');
if(isset($_GET['table'])){
    $table_name = $_GET['table'];

    $course_view = "SELECT * FROM $table_name";
    $r_course_view = $conn->query($course_view);
    switch ($table_name) {
        case "course11":
            $title="1st Year 1st Semester";
        break;
        case "course12":
            $title="1st Year 2nd Semester";
            break;
        case "course21":
            $title="2nd Year 1st Semester";
            break;
        case "course22":
            $title="2nd Year 2nd Semester";
            break;
        case "course31":
            $title="3rd Year 1st Semester";
            break;
        case "course32":
            $title="3rd Year 2nd Semester";
            break;
        case "course41":
            $title="4th Year 1st Semester";
            break;
        case "course42":
            $title="4th Year 2nd Semester";
            break;
        default:
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
            <div class="teachers_list col-md-12">
                <div class="col-md-12 tch_heading">
                    <div class="heading">
                        <h4><?php echo $title?></h4>
                    </div>
                </div>
                <div class="col-md-12 phone_book_tbl">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Course Code</th>
                                <th>Course Title</th>
                                <th>Theory</th>
                                <th>Lab</th>
                                <th>Total</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            while($row = mysqli_fetch_array($r_course_view)){

                                $course_code = $row['course_code'];
                                $course_title = $row['course_title'];
                                $theory_credit = $row['theory'];
                                $lab_credit = $row['lab'];
                                $total_credit = $row['total'];

                                ?>
                                <tr >
                                    <td><?php echo $course_code   ?></td>
                                    <td><?php echo $course_title   ?></td>
                                    <td><?php echo $theory_credit   ?></td>
                                    <td><?php echo $lab_credit   ?></td>
                                    <td><?php echo $total_credit   ?></td>
                                </tr>
                            <?php  }?>
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
