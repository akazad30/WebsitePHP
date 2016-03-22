<?php
session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}

?>
<?php
include('config/connection.php');
if(isset($_GET['table'])){
    $table_name = $_GET['table'];

    $course_view = "SELECT * FROM $table_name";
    $r_course_view = $conn->query($course_view);
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
        <div class="container-fluid">
            <div class="row">
                <div style="margin-bottom: 15px;" class="col-md-12">
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Title</th>
                                    <th>Theory</th>
                                    <th>Lab</th>
                                    <th>Total</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
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
                                    $id = $row['id'];
                                    ?>
                                    <tr >
                                        <td align="center"><?php echo $course_code   ?></td>
                                        <td><?php echo $course_title   ?></td>
                                        <td align="center"><?php echo $theory_credit   ?></td>
                                        <td align="center"><?php echo $lab_credit   ?></td>
                                        <td align="center"><?php echo $total_credit   ?></td>
                                        <td align="center"><a href="course-curriculum-update.php?id=<?php echo $id ?>&table=<?php if(isset($_GET['table'])){$table_name = $_GET['table']; echo $table_name;}?>"><button id="btn" class="btn btn-default">Edit Course</button></a></td>
                                        <td align="center"><a href="course-curriculum-delete.php?id=<?php echo $id ?>&table=<?php if(isset($_GET['table'])){$table_name = $_GET['table']; echo $table_name;}?>"><button  name="delete" id="btn" class="btn btn-default">Delete Course</button></a></td>
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
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<?php include('config/footer.php'); ?>
</body>

</html>
