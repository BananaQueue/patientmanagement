<?php
session_start();

if (isset($_POST['PatientID'])) {
    $PatientID = $_POST['PatientID'];
    // Store $PatientID in session or wherever you need it
    $_SESSION['selectedPatientID'] = $PatientID;
    // You can perform additional processing here if needed
    echo "PatientID stored successfully";
} else {
    echo "Error: PatientID not received";
}
