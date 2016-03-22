<?php
session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}

?>
<?php

include('config/connection.php');

$notice = "SELECT * FROM notice ORDER BY id DESC";
$r_notice = $conn->query($notice);

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
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Heading</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php
                                    while($row = mysqli_fetch_array($r_notice)){
                                    $notice_heading = $row['notice_heading'];
                                    $notice_date = $row['notice_date'];
                                    $notice_id = $row['id'];
                                ?>
                                <tr >
                                    <td align="center"><?php echo $notice_date   ?></td>
                                    <td><?php echo $notice_heading   ?></td>
                                    <td align="center"><a href="notice_update.php?id=<?php echo $notice_id?>"><button id="btn" class="btn btn-default">Edit Notice</button></a></td>
                                    <td align="center"><a href="notice_delete.php?id=<?php echo $notice_id?>"<button name="delete" id="btn" class="btn btn-default">Delete Notice</button></a></td>
                                </tr>
                                <?php } ?>

                                </tbody>
                            </table>
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

    <?php include('config/footer.php'); ?>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

</body>

</html>