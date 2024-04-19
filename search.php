<?php
include 'config.php';

$query = $_GET['query'];

$sql = "SELECT * FROM patients WHERE FirstName LIKE '%$query%' OR LastName LIKE '%$query%'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
</head>

<body>
    <h1>Search Results</h1>

    <table border="1">
        <tr>
            <th>Patient ID</th>
            <th>Name</th>
            <th>Other Details</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['PatientID'] . "</td>";
                echo "<td>" . $row['FirstName'] . " " . $row['MiddleName'] . " " . $row['LastName'] . " " . $row['Suffix'] . "</td>";
                echo "<td><a href='view_details.php?PatientID=" . $row['PatientID'] . "'>View</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No results found</td></tr>";
        }
        ?>
    </table>
</body>

</html>