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
    $news_select = "SELECT *FROM news WHERE id = $id";
    $r_news = $conn->query($news_select);
    $news = mysqli_fetch_assoc($r_news);
    $news_heading = $news['news_heading'];
    $news_post = $news['news_post'];
    $news_date = $news['news_date'];
    $news_id = $news['id'];

}
if(isset($_POST['submit'])) {
    $news_heading = $_POST['news_heading'];
    $news_date = $_POST['news_date'];
    $news_text = $_POST['news_text'];
    $id = $_POST['news_id'];
    $news_update="UPDATE news SET news_heading='$news_heading',news_post='$news_text',news_date='$news_date' WHERE id = $id ";
    $conn->query($news_update);
    header('location: news.php');


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
                        <h4 style="text-align: center;padding: 10px 0px">Write News Here</h4>
                        <div class="form-group">
                            <label for="news_heading">News Heading:</label>
                            <input name="news_heading" type="text" class="form-control" id="news_heading" value="<?php echo $news_heading;?>">
                        </div>
                        <div class="form-group">
                            <label for="news_date">news Date:</label>
                            <input name="news_date" type="text" class="form-control" id="news_date" value="<?php echo $news_date;?>">
                        </div>
                        <div class="form-group">
                            <label for="news_id">news Date:</label>
                            <input name="news_id" type="hidden" class="form-control" id="news_id" value="<?php echo $news_id;?>">
                        </div>
                        <div class="form-group">
                            <label for="editor">Write Here</label>
                            <textarea name="news_text" class="editor" rows="8" id="editor" ><?php echo $news_post;?></textarea>
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

