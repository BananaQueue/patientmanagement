<?php
include 'config.php';

$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$LastName = $_POST['LastName'];
$Suffix = $_POST['Suffix'];
$DateOfBirth = $_POST['DateOfBirth'];
$Address = $_POST['Address'];

$sql = "INSERT INTO patients (LastName, FirstName, MiddleName, Suffix, DateOfBirth, Address)
        VALUES ('$LastName', '$FirstName', '$MiddleName', '$Suffix', '$DateOfBirth', '$Address')";

if ($conn->query($sql) === TRUE) {
    echo "New patient added successfully";
    header("Location:http://localhost/patientMngmt/dashboard.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
