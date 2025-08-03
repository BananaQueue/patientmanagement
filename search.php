<<<<<<< HEAD
<?php
include 'config.php';

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:http://localhost/patientMngmt/login.php");
    exit;
}

$query = $_GET['query'];


$sql = "SELECT * FROM patients WHERE FirstName LIKE '%$query%' OR LastName LIKE '%$query%'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Search Results</title>
</head>

<body>
    <div class="container">
        <h1>Search Results</h1>

        <table border="1">
            <tr>
                <th>Patient ID</th>
                <th>Name</th>
                <th>Other Actions</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['PatientID'] . "</td>";
                    echo "<td>" . $row['FirstName'] . " " . $row['MiddleName'] . " " . $row['LastName'] . " " . $row['Suffix'] . "</td>";
                    echo "<td><a href='view_details.php?PatientID=" . $row['PatientID'] . "'>View</a>| 
                        <a href='edit_patient.php?PatientID=" . $row['PatientID'] . "'>Edit</a> | 
                        <a href='delete_patient.php?PatientID=" . $row['PatientID'] . "'>Delete</a>
                      </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No results found</td></tr>";
            }
            ?>
        </table>
        <div>
            <h2><a href='dashboard.php'>Go Home</a></h2>
        </div>
    </div>
</body>

=======
<?php
include 'config.php';

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:http://localhost/patientMngmt/login.php");
    exit;
}

$query = $_GET['query'];


$sql = "SELECT * FROM patients WHERE FirstName LIKE '%$query%' OR LastName LIKE '%$query%'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Search Results</title>
</head>

<body>
    <div class="container">
        <h1>Search Results</h1>

        <table border="1">
            <tr>
                <th>Patient ID</th>
                <th>Name</th>
                <th>Other Actions</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['PatientID'] . "</td>";
                    echo "<td>" . $row['FirstName'] . " " . $row['MiddleName'] . " " . $row['LastName'] . " " . $row['Suffix'] . "</td>";
                    echo "<td><a href='view_details.php?PatientID=" . $row['PatientID'] . "'>View</a>| 
                        <a href='edit_patient.php?PatientID=" . $row['PatientID'] . "'>Edit</a> | 
                        <a href='delete_patient.php?PatientID=" . $row['PatientID'] . "'>Delete</a>
                      </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No results found</td></tr>";
            }
            ?>
        </table>
        <div>
            <h2><a href='dashboard.php'>Go Home</a></h2>
        </div>
    </div>
</body>

>>>>>>> 46d2c6dc1852f4ac7e8a22c1ef868ebe5e0f597d
</html>