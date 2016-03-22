<?php
session_start();
if(!$_SESSION['pass']){
    header('location: ../login.php');
}

?>
<?php
include('config/connection.php');
$r_news = $conn->query($news);
if(isset($_GET['id'])){
    $n_id = $_GET['id'];
    $delete_news = "DELETE FROM news WHERE id = '$n_id'";
    $conn->query($delete_news);
    header('location: news.php');


}
?>