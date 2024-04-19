<?php
include 'config.php';


$sql = "SELECT * FROM admissions";
$result = $conn->query($sql);

echo "<h2><a href='add_admission.php'>Admit Patient</a></h2>";
echo "<h2><a href='discharge.php'>Discharge Patient</a></h2>";
?>
<table border="1">
    <tr>
        <th>Patient ID</th>
        <th>Admission ID</th>
        <th>Admission Date</th>
        <th>Discharge Date</th>
        <th>Ward</th>

    </tr>
    <?php
    if ($result->num_rows > 0) {
        echo "<h1>Admission Details</h1>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><p><strong>Patient ID:</strong>" . $row['PatientID'] . "</p></td>";
            echo "<td><p><strong>AdmissionID:</strong>" . $row['AdmissionID'] . "</p></td>";
            echo "<td><p><strong>Admission Date:</strong> " . $row['DateTimeAdmission'] . "</p></td>";
            echo "<td><p><strong>Discharge Date:</strong> " . $row['DateTimeDischarge'] . "</p></td>";
            echo "<td><p><strong>Ward:</strong> " . $row['Ward'] . "</p>";
        }
    } else {
        echo "<p>No admission details found!</p>";
    }
    ?>
</table>
<h2><a href='index.php'>Go Home</a></h2>