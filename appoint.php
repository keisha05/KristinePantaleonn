<?php
include 'database.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $age = $_POST['age'];
    $date_of_appointment = $_POST['date_of_appointment'];

    $sql = "INSERT INTO `guest`(`id`, `last_name`, `first_name`, `age`, `date_of_appointment`)
            VALUES (NULL,'$last_name','$first_name','$age','$date_of_appointment')";

    if($conn->query($sql) === TRUE){
        header("location:./patient.php");
    }else{
        echo "Error; " . $sql. "<br>" . $conn->error;
    }

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $dental_history = $_POST['dental_history'];


    $sql = "INSERT INTO `info`(`id`, `last_name`, `first_name`, `age`, `address`, `dental_history`) 
    VALUES (NULL,'$last_name','$first_name','$age','$address','$dental_history')";

    if($conn->query($sql) === TRUE){
        header("location:./patient.php");
    }else{
        echo "Error; " . $sql. "<br>" . $conn->error;
    }
       
    $conn->close();
}

       
    $conn->close();
}
?>