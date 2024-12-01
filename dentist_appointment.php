<?php
include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/dist/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="appoint1.css">
    <link rel="stylesheet" href="bgc.css">
    <style>
        body {
            display: flex;
            margin: 0;
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
        .container {
            margin-left: 270px; /* Space for the sidebar */
            padding: 20px;
            flex-grow: 1;
        }
    </style>
    <title>Patient Information</title>
</head>
<body>
    <div class="sidebar">
        <h2 class="title is-4">Menu</h2>
        <a href="patient_info.php"><i class="fas fa-plus"></i> Add Patient</a>
        <a href="patient.php"><i class="fas fa-list"></i> View Patient List</a>
        <a href="dentist_appointment.php"><i class="fas fa-calendar-alt"></i> View Appointments</a>
        <a href="reports.php"><i class="fas fa-file-alt"></i> Generate Reports</a>
    </div>
    <div class="container">
        <div class="has-text-centered is size-2 has-background-succes my-2 mx-2">
            <h3>Dentist Appointment</h3>
        </div>
    </div>
    <div>
        <form method="post" action="appoint.php">
            <label class=""for="last_name">Last Name</label>
            <Input type="text" id="last_name" name="last_name" required>

            <label class=""for="first_name">First Name</label>
            <Input type="text" id="first_name" name="first_name" required>

            <label class=""for="age">Age</label>
            <Input type="text" id="age" name="age" required>

            <label class="label-td" colspan="2">
            <label for="dob" class="form-label">Date of Appointment: </label>

            <label class="label-td" colspan="2">
            <input type="date" name="dob" class="input-text" required>

            <label class="label-td" colspan="2">

            <button type="submit">Appoint</button>
        </form>
    </div>
</body>
</html>