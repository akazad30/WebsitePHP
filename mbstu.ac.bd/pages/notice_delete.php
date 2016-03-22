<?php
session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}

?>
<?php
include('config/connection.php');

if(isset($_GET['id'])){
    $n_id = $_GET['id'];
    $delete_notice = "DELETE FROM notice WHERE id = '$n_id'";
    $conn->query($delete_notice);
    header('location: notices.php');
}
?>
