<<<<<<< HEAD
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:http://localhost/patientMngmt/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Admissions Today</title>
</head>

<body>
    <div class="container">
        <h1>Admissions Today</h1>
        <?php
        include_once 'config.php';

        // Fetch admissions within the current day
        $today = date('Y-m-d');
        $sql = "SELECT * FROM Admissions WHERE DATE(DateTimeAdmission) = '$today'";
        $result = mysqli_query($conn, $sql);
        echo "<a href='add_admission.php'>Admit Patient</a> |";
        if (mysqli_num_rows($result) > 0) {
            echo " <a href='discharge.php'>Discharge Patient</a>";
            echo "<table border='1'>";
            echo "<tr><th>Patient</th><th>Admission ID</th><th>Ward</th><th>Admission Time</th><th>Discharge Time</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['PatientID'] . "</td>";
                echo "<td>" . $row['AdmissionID'] . "</td>"; // You may need to join with the Patients table to display patient names
                echo "<td>" . $row['Ward'] . "</td>";
                echo "<td>" . $row['DateTimeAdmission'] . "</td>";
                echo "<td>" . $row['DateTimeDischarge'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No admissions found for today.";
        }

        echo "<h4><a href='view_admission_log.php'>View All Admission Logs</a></h4>";
        mysqli_close($conn);
        ?>
        <div>
            <h2><a href='dashboard.php'>Go Home</a></h2>
        </div>
    </div>
</body>


=======
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:http://localhost/patientMngmt/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Admissions Today</title>
</head>

<body>
    <div class="container">
        <h1>Admissions Today</h1>
        <?php
        include_once 'config.php';

        // Fetch admissions within the current day
        $today = date('Y-m-d');
        $sql = "SELECT * FROM Admissions WHERE DATE(DateTimeAdmission) = '$today'";
        $result = mysqli_query($conn, $sql);
        echo "<a href='add_admission.php'>Admit Patient</a> |";
        if (mysqli_num_rows($result) > 0) {
            echo " <a href='discharge.php'>Discharge Patient</a>";
            echo "<table border='1'>";
            echo "<tr><th>Patient</th><th>Admission ID</th><th>Ward</th><th>Admission Time</th><th>Discharge Time</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['PatientID'] . "</td>";
                echo "<td>" . $row['AdmissionID'] . "</td>"; // You may need to join with the Patients table to display patient names
                echo "<td>" . $row['Ward'] . "</td>";
                echo "<td>" . $row['DateTimeAdmission'] . "</td>";
                echo "<td>" . $row['DateTimeDischarge'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No admissions found for today.";
        }

        echo "<h4><a href='view_admission_log.php'>View All Admission Logs</a></h4>";
        mysqli_close($conn);
        ?>
        <div>
            <h2><a href='dashboard.php'>Go Home</a></h2>
        </div>
    </div>
</body>


>>>>>>> 46d2c6dc1852f4ac7e8a22c1ef868ebe5e0f597d
</html>