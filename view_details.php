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
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Patient Details</title>
</head>

<body>
    <div class="container">
        <h1>Patient Information</h1>
        <table border="1">


            <h2><?php echo $row['FirstName'] . " " . $row['MiddleName'] . " " . $row['LastName'] . " " . $row['Suffix']; ?></h2>
            <h3><?php echo "Patient ID: " . $row['PatientID'] ?></h3>
            <tr>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Addmission</th>
                <th>Actions</th>
            <tr>
                <td><?php echo $row['DateOfBirth']; ?>
                </td>
                <td> <?php echo $row['Address']; ?>
                </td>
                <td>
                    <?php
                    echo "
                <a href='add_admission.php?PatientID=" . $row['PatientID'] . "'>Admit</a> | 
                <a href='discharge.php?PatientID=" . $row['PatientID'] . "'>Discharge</a>";
                    ?>
                </td>
                <td><?php
                    echo "<a href='edit_patient.php?PatientID=" . $row['PatientID'] . "'>Edit</a> | 
                    <a href='delete_patient.php?PatientID=" . $row['PatientID'] . "'>Delete</a>"
                    ?>
                </td>
            </tr>

            </tr>
        </table>

        <div>
            <h3><a href="#" onclick="history.go(-1)">Go Back</a></h3>
        </div>
    </div>
</body>

</html>