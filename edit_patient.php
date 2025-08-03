<<<<<<< HEAD
<?php
include 'config.php';

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:http://localhost/patientMngmt/login.php");
    exit;
}
$PatientID = $_GET['PatientID'];

$sql = "SELECT * FROM patients WHERE PatientID = $PatientID";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Edit Patient</title>
</head>

<body>
    <div class="rectangular ">
        <h1>Edit Patient</h1>

        <form action="process_edit_patient.php" method="POST">
            <input type="hidden" name="PatientID" value="<?php echo $PatientID; ?>">

            <label for="FirstName">First Name:</label>
            <input type="text" name="FirstName" value="<?php echo $row['FirstName']; ?>" required><br>

            <label for="MiddleName">Middle Name:</label>
            <input type="text" name="MiddleName" value="<?php echo $row['MiddleName']; ?>"><br>

            <label for="LastName">Last Name:</label>
            <input type="text" name="LastName" value="<?php echo $row['LastName']; ?>" required><br>

            <label for="Suffix">Suffix:</label>
            <input type="text" name="Suffix" value="<?php echo $row['Suffix']; ?>"><br>

            <label for="DateOfBirth">Date of Birth:</label>
            <input type="date" name="DateOfBirth" value="<?php echo $row['DateOfBirth']; ?>" required><br>

            <label for="Address">Address:</label>
            <input type="text" name="Adress" value="<?php echo $row['Address']; ?>"><br>

            <button type="submit">Update</button>
        </form>
        <div>
            <h3><a href="#" onclick="history.go(-1)">Go Back</a></h3>
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

$sql = "SELECT * FROM patients WHERE PatientID = $PatientID";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Edit Patient</title>
</head>

<body>
    <div class="rectangular ">
        <h1>Edit Patient</h1>

        <form action="process_edit_patient.php" method="POST">
            <input type="hidden" name="PatientID" value="<?php echo $PatientID; ?>">

            <label for="FirstName">First Name:</label>
            <input type="text" name="FirstName" value="<?php echo $row['FirstName']; ?>" required><br>

            <label for="MiddleName">Middle Name:</label>
            <input type="text" name="MiddleName" value="<?php echo $row['MiddleName']; ?>"><br>

            <label for="LastName">Last Name:</label>
            <input type="text" name="LastName" value="<?php echo $row['LastName']; ?>" required><br>

            <label for="Suffix">Suffix:</label>
            <input type="text" name="Suffix" value="<?php echo $row['Suffix']; ?>"><br>

            <label for="DateOfBirth">Date of Birth:</label>
            <input type="date" name="DateOfBirth" value="<?php echo $row['DateOfBirth']; ?>" required><br>

            <label for="Address">Address:</label>
            <input type="text" name="Adress" value="<?php echo $row['Address']; ?>"><br>

            <button type="submit">Update</button>
        </form>
        <div>
            <h3><a href="#" onclick="history.go(-1)">Go Back</a></h3>
        </div>
    </div>
</body>


>>>>>>> 46d2c6dc1852f4ac7e8a22c1ef868ebe5e0f597d
</html>