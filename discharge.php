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
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Patient Discharge</title>
</head>

<body>
    <div class="boxy">
        <h2>Discharge A Patient</h2>
        <form action="process_discharge.php" method="POST">
            <label>Select Admission:</label><br>
            <select name="AdmissionID">
                <?php
                include_once 'config.php';
                $sql = "SELECT * FROM Admissions WHERE DateTimeDischarge IS NULL"; // Only select active admissions
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['AdmissionID'] . "'>Admission ID: " . $row['AdmissionID'] . ", Patient ID: " . $row['PatientID'] . "</option>";
                }
                $conn->close();;
                ?>
            </select><br>
            <label>Discharge Date and Time:</label><br>
            <input type="datetime-local" name="DateTimeDischarge"><br>
            <input type="submit" value="Discharge">
        </form>
        <div>
            <h2><a href='dashboard.php'>Go Home</a> | <a href="#" onclick="history.go(-1)">Go Back</a></h2>
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
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Patient Discharge</title>
</head>

<body>
    <div class="boxy">
        <h2>Discharge A Patient</h2>
        <form action="process_discharge.php" method="POST">
            <label>Select Admission:</label><br>
            <select name="AdmissionID">
                <?php
                include_once 'config.php';
                $sql = "SELECT * FROM Admissions WHERE DateTimeDischarge IS NULL"; // Only select active admissions
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['AdmissionID'] . "'>Admission ID: " . $row['AdmissionID'] . ", Patient ID: " . $row['PatientID'] . "</option>";
                }
                $conn->close();;
                ?>
            </select><br>
            <label>Discharge Date and Time:</label><br>
            <input type="datetime-local" name="DateTimeDischarge"><br>
            <input type="submit" value="Discharge">
        </form>
        <div>
            <h2><a href='dashboard.php'>Go Home</a> | <a href="#" onclick="history.go(-1)">Go Back</a></h2>
        </div>
    </div>
</body>


>>>>>>> 46d2c6dc1852f4ac7e8a22c1ef868ebe5e0f597d
</html>