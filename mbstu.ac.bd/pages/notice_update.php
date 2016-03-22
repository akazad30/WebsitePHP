<?php
session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}

?>
<?php
include('config/connection.php');
if(isset($_GET['id'])){

    $id = $_GET['id'];
    $notice_select = "SELECT *FROM notice WHERE id = $id";
    $r_notice = $conn->query($notice_select);
    $notice = mysqli_fetch_assoc($r_notice);
    $notice_heading = $notice['notice_heading'];
    $notice_post = $notice['notice'];
    $notice_date = $notice['notice_date'];
    $notice_id = $notice['id'];
}
if(isset($_POST['submit'])){
    $notice_heading_update = $_POST['notice_heading'];
    $notice_post_update = $_POST['notice_text'];
    $notice_date_update = $_POST['notice_date'];
    $notice_id = $_POST['notice_id'];
    $notice_update = "UPDATE notice SET notice_heading = '$notice_heading_update', notice = '$notice_post_update', notice_date = '$notice_date_update' WHERE id = $notice_id ";
    $conn->query($notice_update);
    header('location: notices.php');
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
                        <h4 style="text-align: center;padding: 10px 0px">Edit Notice Here</h4>
                        <div class="form-group">
                            <label for="notice_heading">Notice Heading:</label>
                            <input name="notice_heading" type="text" class="form-control" id="notice_heading" value="<?php echo $notice_heading;?>">
                        </div>
                        <div class="form-group">
                            <label for="notice_date">Notice Date:</label>
                            <input name="notice_date" type="text" class="form-control" id="notice_date" value="<?php echo $notice_date;?>">
                        </div>
                        <div class="form-group">
                            <input name="notice_id" type="hidden" class="form-control" id="notice_id" value="<?php echo $notice_id;?>">
                        </div>
                        <div class="form-group">
                            <label for="editor">Edit Here</label>
                            <textarea name="notice_text" class="editor" rows="8" id="editor" ><?php echo $notice_post;?></textarea>
                        </div>
                        <button name="submit" type="submit" class="btn btn-default">Post news</button>
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


