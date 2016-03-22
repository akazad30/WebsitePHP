<?php
session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}

?>
<?php
include('config/connection.php');

if(isset($_GET['id']) && isset($_GET['table'])){
    $n_id = $_GET['id'];
    $name_table=$_GET['table'];
    $delete_notice = "DELETE FROM $name_table WHERE id = '$n_id'";
    $conn->query($delete_notice);

        header('location: dashboard.php');

}
?>
