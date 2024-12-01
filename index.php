<?php include "database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Appointment System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
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
            text-align: center;
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="register"><i class="fas fa-plus"></i> Register</a>
        <a href="patient.php"><i class="fas fa-list"></i> View Patient List</a>
    </div>
    <div class="content">
        <h1>Welcome to the Dental Appointment System</h1>
        <p>Select an option from the sidebar to get started.</p>
    </div>
</body>
</html>