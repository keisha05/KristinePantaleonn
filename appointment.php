<?php
include "database.php";

$id = $_GET['id'];
$sql = "SELECT * FROM `guest` WHERE 1";
$result =$conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulm@1.0.2/dist/css/bulma.min.css">
    <title>Dentist Appointment</title>
</head>
<body>
    <div class="container">
        <h2>Dentist Appointment</h2>
        <form method="post" action="update.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label>Last Name</label>
            <input type="text" last_name value="<?php echo $row['last_name']; ?>"><br>

            <label>First Name</label>
            <input type="text" first_name value="<?php echo $row['first_name']; ?>"><br>

            <label>Age</label>
            <input type="number" age value="<?php echo $row['age']; ?>"><br>

            <label>Date of Appointment</label>
            <input type="date" date_of_appointment value="<?php echo $row['date_of_appointment']; ?>"><br>

            <button type="submit">Update</button>button></button>
        </form>
    </div>
    
</body>
</html>