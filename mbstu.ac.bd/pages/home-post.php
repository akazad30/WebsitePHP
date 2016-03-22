
<?php
include('config/connection.php');


if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select = "SELECT * FROM about WHERE id =$id";
    $r_select = $conn->query($select);

    $row = mysqli_fetch_assoc($r_select);
    $heading = $row['heading'];
    $id = $row['id'];
    $description = $row['description'];
}



if(isset($_POST['submit'])) {
    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $id = $_POST['id'];
    $update = "UPDATE about SET heading = '$heading', description = '$description' WHERE id = $id";
    $conn->query($update);
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include('config/head.php'); ?>

<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="jquery.uploadifive.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadifive.css">
<style type="text/css">
    body {
        font: 13px Arial, Helvetica, Sans-serif;
    }
    .uploadifive-button {
        float: left;
        margin-right: 10px;
    }
    #queue {
        border: 1px solid #E5E5E5;
        height: 54px;
        overflow: auto;
        margin-bottom: 10px;
        padding: 0 3px 3px;
        width: 203px;
    }
    .up_button:hover{text-decoration: none;color:#fff;}
</style>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php include('config/menu.php'); ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div style="width: 780px" class="container-fluid">
            <div class="row">
                <div style="margin-bottom: 15px;" class="col-md-12">
                    <form action="home-post.php" method="post" role="form" enctype="multipart/form-data">
                        <h4 style="text-align: center;padding: 10px 0px">Write Message Here</h4>
                        <div class="form-group">
                            <label for="message_heading">Heading:</label>
                            <input name="heading" value="<?php echo $heading; ?>" type="text" class="form-control" id="message_heading">
                        </div>
                        <div class="form-group">

                            <input name="id" value="<?php echo $id; ?>" type="hidden" class="form-control" id="message_heading">
                        </div>
                        <div class="form-group">
                            <label style="margin-top: 10px;" for="editor">Write Here</label>
                            <div class="form-group">
                                <textarea style="width:100%" name="description" class="editor" rows="8" id="editor"><?php echo $description; ?></textarea>
                            </div>
                        </div>
                        <button name="submit" type="submit" class="btn btn-default">Post</button>
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

<script type="text/javascript">
    <?php $timestamp = time();?>
    $(function() {
        $('#file_upload').uploadifive({
            'auto'             : false,
            'checkScript'      : 'check-exists.php',
            'formData'         : {
                'timestamp' : '<?php echo $timestamp;?>',
                'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
            },
            'queueID'          : 'queue',
            'uploadScript'     : 'upload-vc-img.php',
            'onUploadComplete' : function(file, data) { console.log(data); },
            'height' : 25
        });
    });
</script>

<?php include('config/footer.php'); ?>

</body>

</html>
