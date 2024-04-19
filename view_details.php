<?php
include 'config.php';

$PatientID = $_GET['PatientID'];

$sql = "SELECT * FROM patients WHERE PatientID = $PatientID";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Patient Details</title>
</head>

<body>
    <h1>Patient Details</h1>

    <h2><?php echo $row['FirstName'] . " " . $row['LastName']; ?></h2>
    <p><strong>Date of Birth:</strong> <?php echo $row['DateOfBirth']; ?></p>
    <p><strong>Address:</strong> <?php echo $row['Address']; ?></p>
    <footer>
        <h2><a href='index.php'>Go Home</a></h2>
    </footer>

</html>