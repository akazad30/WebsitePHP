<?php
session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}

?>
<?php
include('config/connection.php');
$news = "SELECT * FROM news ORDER BY id DESC";
$r_news = $conn->query($news);
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
                            while($row=mysqli_fetch_array($r_news)){
                                $news_heading=$row['news_heading'];
                                $news_date=$row['news_date'];
                                $news_post=$row['news_post'];
                                $news_id=$row['id'];
                                ?>
                                <tr >
                                    <td align="center"><?php echo $news_date   ?></td>
                                    <td><?php echo $news_heading   ?></td>
                                    <td align="center"><a href="news_update.php?id=<?php echo $news_id ?>"><button id="btn" class="btn btn-default">Edit News</button></a></td>
                                    <td align="center"><a href="news_delete.php?id=<?php echo $news_id ?>"><button  name="delete" id="btn" class="btn btn-default">Delete News</button></a></td>
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


