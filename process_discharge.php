<?php
include 'config.php';

$PatientID = $_POST['PatientID'];
$DateTimeAdmission = $_POST['DateTimeAdmission'];
$DateTimeDischarge = $_POST['DateTimeDischarge'];

$sql = "UPDATE admissions SET DateTimeDischarge='$DateTimeDischarge' WHERE PatientID=$PatientID";

if ($conn->query($sql) === TRUE) {
    echo "Patient discharged successfully";
    header("Location:http://localhost/patientMngmt/loading_page.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
