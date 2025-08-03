<<<<<<< HEAD
<?php
include 'config.php';

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:http://localhost/patientMngmt/login.php");
    exit;
}

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:http://localhost/patientMngmt/login.php");
    exit;
}

$sql = "SELECT * FROM admissions";
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <table border="1">

            <?php
            if ($result->num_rows > 0) {
                echo "<h1>Admission Details</h1>";
                echo "<a href='add_admission.php'>Admit Patient</a> |
                <a href='discharge.php'>Discharge Patient</a>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><p><strong>Admission ID:</strong>" . $row['AdmissionID'] . "</p></td>";
                    echo "<td><p><strong>Patient ID:</strong>" . $row['PatientID'] . "</p></td>";
                    echo "<td><p><strong>Admission Date:</strong> " . $row['DateTimeAdmission'] . "</p></td>";
                    echo "<td><p><strong>Discharge Date:</strong> " . $row['DateTimeDischarge'] . "</p></td>";
                    echo "<td><p><strong>Ward:</strong> " . $row['Ward'] . "</p>";
                }
            } else {
                echo "<p>No admission details found!</p>";
                echo "<a href='add_admission.php'>Admit Patient</a>";
            }
            ?>
        </table>
        <div>
            <h2><a href='dashboard.php'>Go Home</a>| <a href="#" onclick="history.go(-1)">Go Back</a></h2>
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

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:http://localhost/patientMngmt/login.php");
    exit;
}

$sql = "SELECT * FROM admissions";
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <table border="1">

            <?php
            if ($result->num_rows > 0) {
                echo "<h1>Admission Details</h1>";
                echo "<a href='add_admission.php'>Admit Patient</a> |
                <a href='discharge.php'>Discharge Patient</a>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><p><strong>Admission ID:</strong>" . $row['AdmissionID'] . "</p></td>";
                    echo "<td><p><strong>Patient ID:</strong>" . $row['PatientID'] . "</p></td>";
                    echo "<td><p><strong>Admission Date:</strong> " . $row['DateTimeAdmission'] . "</p></td>";
                    echo "<td><p><strong>Discharge Date:</strong> " . $row['DateTimeDischarge'] . "</p></td>";
                    echo "<td><p><strong>Ward:</strong> " . $row['Ward'] . "</p>";
                }
            } else {
                echo "<p>No admission details found!</p>";
                echo "<a href='add_admission.php'>Admit Patient</a>";
            }
            ?>
        </table>
        <div>
            <h2><a href='dashboard.php'>Go Home</a>| <a href="#" onclick="history.go(-1)">Go Back</a></h2>
        </div>
    </div>
</body>


>>>>>>> 46d2c6dc1852f4ac7e8a22c1ef868ebe5e0f597d
</html>