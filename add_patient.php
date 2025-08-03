<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:http://localhost/patientMngmt/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Add New Patient</title>
</head>

<body>
    <div class="rectangular">
        <h1>Add New Patient</h1>

        <form action="process_add_patient.php" method="POST">
            <label for="FirstName">First Name:</label>
            <input type="text" name="FirstName" required><br>

            <label for="MiddleName">Middle Name:</label>
            <input type="text" name="MiddleName"><br>

            <label for="LastName">Last Name:</label>
            <input type="text" name="LastName" required><br>

            <label for="Suffix">Suffix:</label>
            <input type="text" name="Suffix"><br>

            <label for="DateOfBirth">Date of Birth:</label>
            <input type="date" name="DateOfBirth" required><br>

            <label for="Address">Address:</label>
            <input type=text name="Address" required><br>

            <button type="submit">Add Patient</button>
        </form>
        <div>
            <h2><a href='dashboard.php'>Go Home</a></h2>
        </div>
    </div>

</body>


</html>