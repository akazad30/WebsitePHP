<?php
/*session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}*/
?>
<?php
include('config/connection.php');
$cm_message_select = "SELECT * FROM welcome_message WHERE id =2";
$r_cm_message_select = $conn->query($cm_message_select);

$row = mysqli_fetch_assoc($r_cm_message_select);
$cm_old_heading = $row['heading'];
$cm_old_message = $row['message'];

if(isset($_POST['submit'])) {
    $cm_new_heading = $_POST['cm_message_heading'];
    $cm_new_message = $_POST['cm_message_text'];
    $cm_message_update = "UPDATE welcome_message SET heading = '$cm_new_heading', message = '$cm_new_message' WHERE id = 2";
    $conn->query($cm_message_update);
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
                    <form action="post-cm-msg.php" method="post" role="form" enctype="multipart/form-data">
                        <h4 style="text-align: center;padding: 10px 0px">Write Message Here</h4>
                        <div class="form-group">
                            <label for="message_heading">Message Heading:</label>
                            <input name="cm_message_heading" value="<?php echo $cm_old_heading; ?>" type="text" class="form-control" id="message_heading">
                        </div>
                        <div class="form-group">
                            <label for="">Upload Profile Picture:</label>
                            <div id="queue"></div>
                            <input id="file_upload" name="file_upload" type="file" multiple="true">
                            <a class="up_button" style="position: relative; top: 5px;" href="javascript:$('#file_upload').uploadifive('upload')">Upload Files</a>
                        </div>
                        <div class="form-group">
                            <label style="margin-top: 10px;" for="editor">Write Here</label>
                            <div class="form-group">
                                <textarea style="width:100%" name="cm_message_text" class="editor" rows="8" id="editor"><?php echo $cm_old_message; ?></textarea>
                            </div>
                        </div>
                        <button name="submit" type="submit" class="btn btn-default">Post Message</button>
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
            'uploadScript'     : 'upload-cm-img.php',
            'onUploadComplete' : function(file, data) { console.log(data); },
            'height' : 25
        });
    });
</script>

<?php include('config/footer.php'); ?>

</body>

</html>
