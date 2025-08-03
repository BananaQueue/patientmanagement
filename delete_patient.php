<<<<<<< HEAD
<?php
include 'config.php';

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:http://localhost/patientMngmt/login.php");
    exit;
}

$PatientID = $_GET['PatientID'];
// Check if the form is submitted for deletion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "DELETE FROM admissions WHERE PatientID=$PatientID";

    if ($conn->query($sql) === TRUE) {
        $sql = "DELETE FROM patients WHERE PatientID=$PatientID";
        if ($conn->query($sql) === TRUE) {
            echo "Patient deleted successfully";
            header("Location:http://localhost/patientMngmt/dashboard.php");
        }
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
    exit; // Stop execution after deletion
}

// If not submitted, display confirmation dialog
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Delete Patient</title>
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this patient record?");
        }
    </script>
</head>

<body>
    <div class="container" id="delete">
        <h1>Delete Patient</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?PatientID=<?php echo $PatientID; ?>" method="post" onsubmit="return confirmDelete();">
            <input type="submit" value="Delete">
        </form>
        <div>
            <h2><a href='dashboard.php'>Go Home</a> | <a href="#" onclick="history.go(-1)">Go Back</a></h2>
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

$PatientID = $_GET['PatientID'];
// Check if the form is submitted for deletion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "DELETE FROM admissions WHERE PatientID=$PatientID";

    if ($conn->query($sql) === TRUE) {
        $sql = "DELETE FROM patients WHERE PatientID=$PatientID";
        if ($conn->query($sql) === TRUE) {
            echo "Patient deleted successfully";
            header("Location:http://localhost/patientMngmt/dashboard.php");
        }
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
    exit; // Stop execution after deletion
}

// If not submitted, display confirmation dialog
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Delete Patient</title>
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this patient record?");
        }
    </script>
</head>

<body>
    <div class="container" id="delete">
        <h1>Delete Patient</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?PatientID=<?php echo $PatientID; ?>" method="post" onsubmit="return confirmDelete();">
            <input type="submit" value="Delete">
        </form>
        <div>
            <h2><a href='dashboard.php'>Go Home</a> | <a href="#" onclick="history.go(-1)">Go Back</a></h2>
        </div>
    </div>
</body>

>>>>>>> 46d2c6dc1852f4ac7e8a22c1ef868ebe5e0f597d
</html>