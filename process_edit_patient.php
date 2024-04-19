<?php
include 'config.php';

$PatientID = $_POST['PatientID'];
$FirstName = $_POST['FirstName'];
// Repeat for other fields

$sql = "UPDATE patients SET FirstName='$FirstName' WHERE PatientID=$PatientID";
// Repeat for other fields

if ($conn->query($sql) === TRUE) {
    echo "Patient details updated successfully";
    header("Location:http://localhost/patientMngmt/loading_page.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
