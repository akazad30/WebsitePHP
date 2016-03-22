<?php
session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}
?>

<?php
include('config/connection.php');
if(isset($_GET['id'])&&isset($_GET['table'])) {

    $id = $_GET['id'];
    $table=$_GET['table'];

    $routine_select = "SELECT *FROM $table WHERE id = $id";
    $r_routine = $conn->query($routine_select);
    $routine = mysqli_fetch_assoc($r_routine);
    $day = $routine['dt'];
    $routine_08am = $routine['8am'];
    $routine_09am = $routine['9am'];
    $routine_10am = $routine['10am'];
    $routine_11am = $routine['11am'];
    $routine_12pm = $routine['12pm'];
    $routine_01pm = $routine['1pm'];
    $routine_02pm = $routine['2pm'];
    $routine_03pm = $routine['3pm'];
    $routine_04pm = $routine['4pm'];
    $routine_05pm = $routine['5pm'];


}
if(isset($_POST['submit'])) {
    $routine_08am = $_POST['routine_08am'];
    $routine_09am = $_POST['routine_09am'];
    $routine_10am = $_POST['routine_10am'];
    $routine_11am = $_POST['routine_11am'];
    $routine_12pm = $_POST['routine_12pm'];
    $routine_01pm = $_POST['routine_01pm'];
    $routine_02pm = $_POST['routine_02pm'];
    $routine_03pm = $_POST['routine_03pm'];
    $routine_04pm = $_POST['routine_04pm'];
    $routine_05pm = $_POST['routine_05pm'];
    $table_name = $_POST['r_table'];
    $id = $_POST['r_id'];

    $routine_add = "UPDATE $table_name SET 8am='$routine_08am',9am='$routine_09am',10am='$routine_10am',11am='$routine_11am',12pm='$routine_12pm',1pm='$routine_01pm',2pm='$routine_02pm',3pm='$routine_03pm',4pm='$routine_04pm',5pm='$routine_05pm' WHERE id=$id";
    $conn->query($routine_add);
    header('location: dashboard.php');


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
                        <h4 style="text-align: center;padding: 10px 0px">Edit routine Here</h4>
                        <div class="form-group">
                            <label for="routine_code"><?php echo $day ?></label>
                        </div>
                        <div class="form-group">
                            <label for="routine_code">(08.00-09.50am) Subject:</label>
                            <input name="routine_08am" type="text" class="form-control" id="routine_code" value="<?php echo $routine_08am ?>">
                        </div>
                        <div class="form-group">
                            <label for="routine_code">(09.00-09.50am) Subject:</label>
                            <input name="routine_09am" type="text" class="form-control" id="routine_code" value="<?php echo $routine_09am ?>">
                        </div>
                        <div class="form-group">
                            <label for="routine_code">(10.00-10.50am) Subject:</label>
                            <input name="routine_10am" type="text" class="form-control" id="routine_code" value="<?php echo $routine_10am ?>">
                        </div>
                        <div class="form-group">
                            <label for="routine_code">(11.00-11.50am) Subject:</label>
                            <input name="routine_11am" type="text" class="form-control" id="routine_code" value="<?php echo $routine_11am ?>">
                        </div>
                        <div class="form-group">
                            <label for="routine_code">(12.00-12.50pm) Subject:</label>
                            <input name="routine_12pm" type="text" class="form-control" id="routine_code" value="<?php echo $routine_12pm ?>">
                        </div>
                        <div class="form-group">
                            <label for="routine_code">(01.00-01.50am) Subject:</label>
                            <input name="routine_01pm" type="text" class="form-control" id="routine_code" value="<?php echo $routine_01pm ?>">
                        </div>
                        <div class="form-group">
                            <label for="routine_code">(02.00-02.50am) Subject:</label>
                            <input name="routine_02pm" type="text" class="form-control" id="routine_code" value="<?php echo $routine_02pm ?>">
                        </div>
                        <div class="form-group">
                            <label for="routine_code">(03-03.50pm) Subject:</label>
                            <input name="routine_03pm" type="text" class="form-control" id="routine_code" value="<?php echo $routine_03pm ?>">
                        </div>
                        <div class="form-group">
                            <label for="routine_code">(04-04.50pm) Subject:</label>
                            <input name="routine_04pm" type="text" class="form-control" id="routine_code" value="<?php echo $routine_04pm ?>">
                        </div>
                        <div class="form-group">
                            <label for="routine_code">(05-05.50pm) Subject:</label>
                            <input name="routine_05pm" type="text" class="form-control" id="routine_code" value="<?php echo $routine_05pm ?>">
                        </div>
                        <input name="r_table" type="hidden" class="form-control" value="<?php if(isset($_GET['table'])){ echo $_GET['table']; } ?>">
                        <input name="r_id" type="hidden" class="form-control" value="<?php if(isset($_GET['id'])){ echo $_GET['id']; } ?>">
                        <button name="submit" type="submit" class="btn btn-default">Add routine</button>
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

