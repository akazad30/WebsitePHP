<?php
session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}

?>

<?php
include('config/connection.php');

if(isset($_POST['submit'])) {
    $course_code = $_POST['course_code'];
    $course_title = $_POST['course_title'];
    $theory_credit = $_POST['theory_credit'];
    $lab_credit = $_POST['lab_credit'];
    $total_credit = $_POST['total_credit'];
    $table_name = $_POST['cc_table'];
    $course_add = "INSERT INTO $table_name(course_code,course_title,theory,lab,total) VALUES ('$course_code','$course_title','$theory_credit','$lab_credit','$total_credit')";
    $conn->query($course_add);
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include('config/head.php'); ?>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php include('config/menu.php'); ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div style="width: 780px" class="container-fluid">
            <div class="row">
                <div style="margin-bottom: 15px;" class="col-md-12">
                    <form action="course-curriculum-add.php" method="post" role="form">
                        <h4 style="text-align: center;padding: 10px 0px">Add Courses Here</h4>
                        <div class="form-group">
                            <label for="course_code">Course Code:</label>
                            <input name="course_code" type="text" class="form-control" id="course_code">
                        </div>
                        <div class="form-group">
                            <label for="course_title">Course Title:</label>
                            <input name="course_title" type="text" class="form-control" id="course_title">
                        </div>
                        <div class="form-group">
                            <label for="theory_credit">Theory(Credit):</label>
                            <input name="theory_credit" type="text" class="form-control" id="theory_credit">
                        </div>
                        <div class="form-group">
                            <label for="lab_credit">Lab(Credit):</label>
                            <input name="lab_credit" type="text" class="form-control" id="lab_credit">
                        </div>
                        <div class="form-group">
                            <label for="total_credit">Total(Credit):</label>
                            <input name="total_credit" type="text" class="form-control" id="total_credit">
                        </div>
                        <input name="cc_table" type="hidden" class="form-control" value="<?php if(isset($_GET['table'])){ echo $_GET['table']; } ?>">
                        <button name="submit" type="submit" class="btn btn-default">Add Course</button>
                    </form>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<?php include('config/footer.php'); ?>
</body>

</html>
