<?php
// update.php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $age = $_POST['age'];
    $date_of_appointment = $_POST['date_of_appointment'];

    $sql = "UPDATE `guest` SET `last_name`='$last_name',`first_name`='$first_name',`age`='$age',`date_of_appointment`='$date_of_appointment' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>