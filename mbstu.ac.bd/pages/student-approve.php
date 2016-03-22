<?php
include('config/connection.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $select = "SELECT *FROM temp_student WHERE id = $id";
    $r_select = $conn->query($select);
    while($row = mysqli_fetch_array($r_select)) {
        $name = $row['fn']." ".$row['ln'];
        $student_id = $row['id_no'];
        $email = $row['email'];
        $pwd = $row['password'];
        $dob = $row['bd'];
        $semester=$row['semester'];
    }
    $register = "INSERT INTO students(id_no,name,dob,email,password,semester) VALUES ('$student_id','$name','$dob','$email','$pwd','$semester')";
    $conn->query($register);
    $tsologin= "INSERT INTO tsologin(email,password) VALUES ('$email','$pwd')";
    $conn->query($tsologin);
    $delete = "DELETE FROM temp_student WHERE id = $id";
    $conn->query($delete);
    header('location:student-approval.php?table=temp_student');
}

?>