<<<<<<< HEAD
<?php
include 'config.php';

$PatientID = $_POST['PatientID'];
$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$LastName = $_POST['LastName'];
$Suffix = $_POST['Suffix'];
$DateOfBirth = $_POST['DateOfBirth'];
$Address = $_POST['Address'];


// Repeat for other fields

$sql = "UPDATE patients SET FirstName='$FirstName', MiddleName='$MiddleName', LastName='$LastName', Suffix='$Suffix', DateOfBirth='$DateOfBirth', Address = '$Address'  
            WHERE PatientID=$PatientID";
// Repeat for other fields

if ($conn->query($sql) === TRUE) {
    echo "Patient details updated successfully";
    header("Location:http://localhost/patientMngmt/dashboard.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
=======
<?php
include 'config.php';

$PatientID = $_POST['PatientID'];
$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$LastName = $_POST['LastName'];
$Suffix = $_POST['Suffix'];
$DateOfBirth = $_POST['DateOfBirth'];
$Address = $_POST['Address'];


// Repeat for other fields

$sql = "UPDATE patients SET FirstName='$FirstName', MiddleName='$MiddleName', LastName='$LastName', Suffix='$Suffix', DateOfBirth='$DateOfBirth', Address = '$Address'  
            WHERE PatientID=$PatientID";
// Repeat for other fields

if ($conn->query($sql) === TRUE) {
    echo "Patient details updated successfully";
    header("Location:http://localhost/patientMngmt/dashboard.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
>>>>>>> 46d2c6dc1852f4ac7e8a22c1ef868ebe5e0f597d
