<?php
include('config/connection.php');

if(isset($_GET['id'])){
    $n_id = $_GET['id'];
    $delete_event = "DELETE FROM events WHERE id = '$n_id'";
    $conn->query($delete_event);
    header('location: events.php');
}
?>
<?php
session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}

?>