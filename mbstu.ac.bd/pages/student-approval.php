<?php
session_start();
if(!$_SESSION['pass']){
    header('location: login.php');
}

?>
<?php
include('config/connection.php');
if(isset($_GET['table'])){
    $table_name = $_GET['table'];

    $select = "SELECT * FROM $table_name";
    $result = $conn->query($select);
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
                                <tr align="center">
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date Of Birth</th>
                                    <th>Approve</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                while($row = mysqli_fetch_array($result)){
                                    $id=$row[0];
                                    $name = $row['1']." ".$row['2'];
                                    $student_id = $row['3'];
                                    $email = $row['4'];
                                    $pass = $row['5'];
                                    $dob = $row['6'];

                                    ?>
                                    <tr >
                                        <td align="center"><?php echo $name   ?></td>
                                        <td align="center"><?php echo $student_id   ?></td>
                                        <td align="center"><?php echo $dob   ?></td>
                                        <td align="center"><a href="student-approve.php?id=<?php  echo $id;?>"><button id="btn" class="btn btn-default">Approve</button></a></td>
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
