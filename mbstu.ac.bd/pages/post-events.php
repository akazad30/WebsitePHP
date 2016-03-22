<?php
session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}

?>
<?php
include('config/connection.php');
if(isset($_POST['submit'])) {
    $event_heading = $_POST['event_heading'];
    $event_date = $_POST['event_date'];
    $event_text = $_POST['event_text'];

    $event_insert = "INSERT INTO events(event_heading,event_post,event_date)
                      VALUES('$event_heading','$event_text','$event_date')";
    $conn->query($event_insert);
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
                    <form action="post-events.php" method="post" role="form">
                        <h4 style="text-align: center;padding: 10px 0px">Write Event Here</h4>
                        <div class="form-group">
                            <label for="event_heading">Event Heading:</label>
                            <input name="event_heading" type="text" class="form-control" id="event_heading">
                        </div>
                        <div class="form-group">
                            <label for="event_date">Event Date:</label>
                            <input name="event_date" type="text" class="form-control" id="event_date">
                        </div>
                        <div class="form-group">
                            <label for="editor">Write Here</label>
                            <textarea name="event_text" class="editor" rows="8" id="editor"></textarea>
                        </div>
                        <button name="submit" type="submit" class="btn btn-default">Post Event</button>
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
