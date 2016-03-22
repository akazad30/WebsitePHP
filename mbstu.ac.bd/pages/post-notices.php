<?php
session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}

?>
<?php
include('config/connection.php');
if(isset($_POST['submit'])) {
    $notice_heading = $_POST['notice_heading'];
    $notice_date = $_POST['notice_date'];
    $notice_text = $_POST['notice_text'];

    $notice_insert = "INSERT INTO notice(notice_heading,notice,notice_date)
                      VALUES('$notice_heading','$notice_text','$notice_date')";
    $conn->query($notice_insert);
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
                    <form action="post-notices.php" method="post" role="form">
                        <h4 style="text-align: center;padding: 10px 0px">Write Notice Here</h4>
                        <div class="form-group">
                            <label for="notice_heading">Notice Heading:</label>
                            <input name="notice_heading" type="text" class="form-control" id="notice_heading">
                        </div>
                        <div class="form-group">
                            <label for="notice_date">Notice Date:</label>
                            <input name="notice_date" type="text" class="form-control" id="notice_date">
                        </div>
                        <div class="form-group">
                            <label for="editor">Write Here</label>
                            <textarea name="notice_text" class="editor" rows="8" id="editor"></textarea>
                        </div>
                        <button name="submit" type="submit" class="btn btn-default">Post Notice</button>
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
