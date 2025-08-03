<?php
include 'config.php';

$PatientID = $_POST['PatientID'];
$DateTimeAdmission = $_POST['DateTimeAdmission'];
$Ward = $_POST['Ward'];

$sql = "INSERT INTO admissions (PatientID, DateTimeAdmission, Ward)
        VALUES ('$PatientID', '$DateTimeAdmission', '$Ward')";

if ($conn->query($sql) === TRUE) {
    echo "Patient admitted successfully";
    header("Location:http://localhost/patientMngmt/fetch_admissions.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
