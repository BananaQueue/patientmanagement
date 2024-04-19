<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Patient Filing System</title>
</head>

<body>
    <h1>Patient Management System</h1>

    <a href="add_patient.php">Add New Patient</a>|
    <a href="view_admission.php">View Admissions</a><br>

    <form action="search.php" method="GET">
        <input type="text" name="query" placeholder="Search by name">
        <button type="submit">Search</button>
    </form>

    <h2>Patients</h2>
    <table border="1">
        <tr>
            <th>Patient ID</th>
            <th>Name</th>
            <th>Admissions</th>
            <th>Actions</th>

        </tr>
        <?php
        $sql = "SELECT * FROM patients";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['PatientID'] . "</td>";
                echo "<td>" . $row['FirstName'] . " " . $row['MiddleName'] . " " . $row['LastName'] . " " . $row['Suffix'] . " </td>";
                echo "<td><a href='add_admission.php?PatientID=" . $row['PatientID'] . "'>Admit</a>| 
                        <a href='discharge.php?PatientID=" . $row['PatientID'] . "'>Discharge</a>
                    </td>";
                echo "<td><a href='view_details.php?PatientID=" . $row['PatientID'] . "'>View</a>| 
                        <a href='edit_patient.php?PatientID=" . $row['PatientID'] . "'>Edit</a> | 
                        <a href='delete_patient.php?PatientID=" . $row['PatientID'] . "'>Delete</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No patients found</td></tr>";
        }
        ?>
    </table>
</body>

</html>