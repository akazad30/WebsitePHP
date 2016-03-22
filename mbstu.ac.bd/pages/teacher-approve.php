<?php
include('config/connection.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $select = "SELECT *FROM temp_teacher WHERE id = $id";
    $r_select = $conn->query($select);
    while($row = mysqli_fetch_array($r_select)) {
        $name = $row['fn']." ".$row['ln'];
        $email = $row['email'];
        $pwd = $row['password'];
        $dob = $row['dob'];
        $designation= $row['designation'];
    }

    $register = "INSERT INTO teacher(name,email,password,dob,designation) VALUES ('$name','$email','$pwd','$dob','$designation')";
    $conn->query($register);
    $tsologin= "INSERT INTO tsologin(email,password) VALUES ('$email','$pwd')";
    $conn->query($tsologin);
    $delete = "DELETE FROM temp_teacher WHERE id = $id";
    $conn->query($delete);
    echo "Approve SuccessFull";
}

?>