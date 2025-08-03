<<<<<<< HEAD
<?php
include 'config.php';
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:http://localhost/patientMngmt/login.php");
    exit;
}

$PatientID = isset($_GET['PatientID']) ? $_GET['PatientID'] : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Add Patient Admission</title>


</head>

<body>
    <div class="boxy">
        <h1>Admit A Patient</h1>
        <form action="process_add_admission.php" method="POST">
            <label>Select Patient:</label><br>
            <select name="PatientID">
                <?php
                include_once 'config.php';
                $sql = "SELECT * FROM Patients WHERE PatientID NOT IN (SELECT PatientID FROM Admissions WHERE DateTimeDischarge IS NULL)"; // Only select not admitted patients
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['PatientID'] . "'>" . $row['LastName'] . ", " . $row['FirstName'] . "</option>";
                }
                $conn->close();
                ?>
            </select><br>
            <label for="Ward">Ward:</label>
            <input type="text" name="Ward" required><br>
            <label>Admission Date and Time:</label><br>
            <input type="datetime-local" name="DateTimeAdmission" required><br>

            <button type="submit">Admit Patient</button>
        </form>
        <div>
            <h2><a href='dashboard.php'>Go Home</a> | <a href="#" onclick="history.go(-1)">Go Back</a> </h2>
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

$PatientID = isset($_GET['PatientID']) ? $_GET['PatientID'] : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Add Patient Admission</title>


</head>

<body>
    <div class="boxy">
        <h1>Admit A Patient</h1>
        <form action="process_add_admission.php" method="POST">
            <label>Select Patient:</label><br>
            <select name="PatientID">
                <?php
                include_once 'config.php';
                $sql = "SELECT * FROM Patients WHERE PatientID NOT IN (SELECT PatientID FROM Admissions WHERE DateTimeDischarge IS NULL)"; // Only select not admitted patients
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['PatientID'] . "'>" . $row['LastName'] . ", " . $row['FirstName'] . "</option>";
                }
                $conn->close();
                ?>
            </select><br>
            <label for="Ward">Ward:</label>
            <input type="text" name="Ward" required><br>
            <label>Admission Date and Time:</label><br>
            <input type="datetime-local" name="DateTimeAdmission" required><br>

            <button type="submit">Admit Patient</button>
        </form>
        <div>
            <h2><a href='dashboard.php'>Go Home</a> | <a href="#" onclick="history.go(-1)">Go Back</a> </h2>
        </div>
    </div>
</body>

>>>>>>> 46d2c6dc1852f4ac7e8a22c1ef868ebe5e0f597d
</html>