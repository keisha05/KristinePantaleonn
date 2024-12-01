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
        <a href="register.php"><i class="fas fa-plus"></i> Register</a>
        <a href="patient.php"><i class="fas fa-list"></i> View Patient List</a>
    </div>
    <div class="container">
    <h3 class="title is-3 has-text-centered">Patient Information</h3>
    <form method="post" action="dentist_appointment.php">
        <div class="field mb-3">
            <label class="label" for="last_name">Last Name</label>
            <div class="control">
                <input class="input" type="text" id="last_name" name="last_name" required>
            </div>
        </div>

        <div class="field mb-3">
            <label class="label" for="first_name">First Name</label>
            <div class="control">
                <input class="input" type="text" id="first_name" name="first_name" required>
            </div>
        </div>

        <div class="field mb-3">
            <label class="label" for="age">Age</label>
            <div class="control">
                <input class="input" type="text" id="age" name="age" required>
            </div>
        </div>

        <div class="field mb-3">
            <label class="label" for="address">Address</label>
            <div class="control">
                <input class="input" type="text" id="address" name="address" required>
            </div>
        </div>

        <div class="field mb-3">
            <label class="label" for="dental_history">Dental History</label>
            <div class="control">
                <input class="input" type="text" id="dental_history" name="dental_history" required>
            </div>
        </div>

        <div class="control">
            <button class="button is-success is-fullwidth" type="submit">Submit</button>
        </div>
    </form>
</div>