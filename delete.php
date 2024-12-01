<?php
// delete.php
include 'database.php';

$id = $_GET['id'];
$sql = "DELETE FROM guest WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("location: patient.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>