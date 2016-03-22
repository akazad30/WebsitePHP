<?php
session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}

?>
<?php

include('config/connection.php');

$event = "SELECT * FROM events ORDER BY id DESC";
$r_event = $conn->query($event);

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
                            while($row=mysqli_fetch_array($r_event)){
                                $event_heading=$row[1];
                                $event_date=$row[3];
                                $event_id=$row[0];
                                ?>
                                <tr >
                                    <td align="center"><?php echo $event_date   ?></td>
                                    <td><?php echo $event_heading   ?></td>
                                    <td align="center"><a href="events_update.php?id=<?php echo $event_id ?>"><button id="btn" class="btn btn-default">Edit Event</button></a></td>
                                    <td align="center"><a href="events_delete.php?id=<?php echo $event_id ?>"><button name="delete" id="btn" class="btn btn-default">Delete Event</button></a></td>

                                </tr>
                            <?php  }?>

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

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<?php include('config/footer.php'); ?>

</body>

</html>
