<?php
include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #f8f9fa;
            padding: 20px;
            height: 100vh;
            position: fixed;
        }
        .sidebar h2 {
            text-align: center;
            color: #333;
        }
        .sidebar a {
            display: block;
            margin: 15px 0;
            padding: 10px;
            text-decoration: none;
            color: #333;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .sidebar a:hover {
            background-color: #e2e6ea;
        }
        .content {
            margin-left: 270px; /* Space for the sidebar */
            padding: 20px;
            flex-grow: 1;
        }
        h1 {
            color: pink;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: pink;
            color: white;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="register.php"><i class="fas fa-plus"></i> Register</a>
        <a href="patient.php"><i class="fas fa-list"></i> View Patient List</a>
    </div>
    <div class="content">
        <h2>Appointment</h2>
        <a href="index.php">Go to Dashboard</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Age</th>
                <th>Date of Appointment</th>
                <th>Actions</th>
            </tr>
            <?php
            $sql = "SELECT * FROM `guest` WHERE 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["last_name"] . "</td>";
                    echo "<td>" . $row["first_name"] . "</td>";
                    echo "<td>" . $row["age"] . "</td>";
                    echo "<td>" . $row["date_of_appointment"] . "</td>";
                    echo "<td><a href='appointment.php?id=" . $row["id"] . "'></a> | <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
            }
            ?>
        </table>
        
        <h2>Patient Information</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Dental History</th>
                <th>Actions</th>
            </tr>
            <?php
            $sql = "SELECT * FROM `info` WHERE 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["last_name"] . "</td>";
                echo "<td>" . $row["first_name"] . "</td>";
                echo "<td>" . $row["age"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["dental_history"] . "</td>";
                echo "<td><a href='patient_info.php?id=" . $row["id"] . "'</a>  <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan= '10'>No records found</td></tr>";
        }
        $conn->close()
        ?>
    </table>
</body>
</html>