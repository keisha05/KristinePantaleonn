<?php
include 'database.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $age = $_POST['age'];
    $date_of_appointment = $_POST['date_of_appointment'];

    $sql = "INSERT INTO `info`(`id`, `last_name`, `first_name`, `age`, `date_of_appointment`)
            VALUES (NULL,'$last_name','$first_name','$age','$date_of_appointment')";

    if($conn->query($sql) === TRUE){
        header("location:./patient.php");
    }else{
        echo "Error; " . $sql. "<br>" . $conn->error;
    }
       
    $conn->close();
}
?>