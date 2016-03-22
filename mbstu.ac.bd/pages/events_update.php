<?php
session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}

?>
<?php
include('config/connection.php');
if(isset($_GET['id'])) {

    $id = $_GET['id'];
    $events_select = "SELECT *FROM events WHERE id = $id";
    $r_events = $conn->query($events_select);
    $events = mysqli_fetch_assoc($r_events);
    $events_heading = $events['event_heading'];
    $events_post = $events['event_post'];
    $events_date = $events['event_date'];
    $events_id = $events['id'];

}
if(isset($_POST['submit'])) {
    $events_heading = $_POST['events_heading'];
    $events_date = $_POST['events_date'];
    $events_text = $_POST['events_text'];
    $id = $_POST['events_id'];
    $events_update="UPDATE events SET event_heading='$events_heading',event_post='$events_text',event_date='$events_date' WHERE id = $id ";
    $conn->query($events_update);
    header('location: events.php');

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
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" role="form">
                        <h4 style="text-align: center;padding: 10px 0px">Edit Events Here</h4>
                        <div class="form-group">
                            <label for="events_heading">Events Heading:</label>
                            <input name="events_heading" type="text" class="form-control" id="events_heading" value="<?php echo $events_heading;?>">
                        </div>
                        <div class="form-group">
                            <label for="events_date">Events Date:</label>
                            <input name="events_date" type="text" class="form-control" id="events_date" value="<?php echo $events_date;?>">
                        </div>
                        <div class="form-group">
                            <input name="events_id" type="hidden" class="form-control" id="events_id" value="<?php echo $events_id;?>">
                        </div>
                        <div class="form-group">
                            <label for="editor">Write Here</label>
                            <textarea name="events_text" class="editor" rows="8" id="editor" ><?php echo $events_post;?></textarea>
                        </div>
                        <button name="submit" type="submit" class="btn btn-default">Post events</button>
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

