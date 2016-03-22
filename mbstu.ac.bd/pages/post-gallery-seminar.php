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
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Panel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="jquery.uploadifive.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="uploadifive.css">
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
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
            height: 390px;
            overflow: auto;
            margin-bottom: 10px;
            padding: 0 3px 3px;
            width: 300px;
        }
        .up_button:hover{text-decoration: none;color:#fff;}
    </style>
    <?php include('config/head.php'); ?>
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php include('config/menu.php'); ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div style="width: 400px;" class="container-fluid">
            <div class="row">
                <div style="margin-bottom: 15px; margin-top: 30px" class="col-md-12">
                    <form action="" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Upload Slider Images Here:</label>
                            <div id="queue"></div>
                            <input id="file_upload" name="file_upload" type="file" multiple="true">
                            <a class="up_button" style="position: relative; top: 2px;" href="javascript:$('#file_upload').uploadifive('upload')">Upload Files</a>
                        </div>
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

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "#editor",
        theme: "modern",
        plugins: [
            "autosave layer advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor jbimages"
        ],
        content_css: "css/content.css",
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],
        relative_urls: false
    });
</script>

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
            'uploadScript'     : 'upload-gallery-seminar.php',
            'onUploadComplete' : function(file, data) { console.log(data); },
            'height' : 25
        });
    });
</script>

</body>

</html>
