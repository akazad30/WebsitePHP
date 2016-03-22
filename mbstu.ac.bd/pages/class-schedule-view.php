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

    $routine_view = "SELECT * FROM $table_name";
    $r_routine_view = $conn->query($routine_view);
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
                                    <th >No</th>
                                    <th >Day</th>
                                    <th >Update</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                while($row = mysqli_fetch_array($r_routine_view)){

                                    $day = $row['dt'];
                                    $id = $row['id'];
                                    ?>
                                    <tr >
                                        <td align="center"><?php echo $id   ?></td>
                                        <td align="center"><?php echo $day   ?></td>
                                        <td align="center"><a href="class-schedule-update.php?id=<?php echo $id ?>&table=<?php if(isset($_GET['table'])){$table_name = $_GET['table']; echo $table_name;}?>"><button id="btn" class="btn btn-default">Update</button></a></td>
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
