<<<<<<< HEAD
<?php
session_start();

include 'config.php';
$DateTimeAdmission = isset($_GET['DateTimeAdmission']) ? $_GET['DateTimeAdmission'] : null;


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:http://localhost/patientMngmt/login.php");
    exit;
}

$nameuser = $_SESSION['userName'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Dashboard</title>
</head>

<body>
    <div class="logout-nav">
        <h1>Welcome, <?php echo $nameuser; ?>!</h1>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container">
        <h1>Patient Management System</h1>
        <div class="search">
            <div class="actions-nav">
                <a href="add_patient.php">Add New Patient</a> |
                <a href="fetch_admissions.php">View Admissions</a><br>
            </div>

            <form action="search.php" method="GET">
                <div id="search-btn">
                    <button type="submit">Search</button>
                    <input type="text" name="query" placeholder="Search by Name" required>
                </div>
            </form>

        </div>
        <h2>Patients</h2>
        <table border="1">
            <tr>
                <th>Patient ID</th>
                <th>Name</th>
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
                    echo "<td><a href='view_details.php?PatientID=" . $row['PatientID'] . "'>View</a> | 
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
    </div>
</body>

=======
<?php
session_start();

include 'config.php';
$DateTimeAdmission = isset($_GET['DateTimeAdmission']) ? $_GET['DateTimeAdmission'] : null;


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:http://localhost/patientMngmt/login.php");
    exit;
}

$nameuser = $_SESSION['userName'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Dashboard</title>
</head>

<body>
    <div class="logout-nav">
        <h1>Welcome, <?php echo $nameuser; ?>!</h1>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container">
        <h1>Patient Management System</h1>
        <div class="search">
            <div class="actions-nav">
                <a href="add_patient.php">Add New Patient</a> |
                <a href="fetch_admissions.php">View Admissions</a><br>
            </div>

            <form action="search.php" method="GET">
                <div id="search-btn">
                    <button type="submit">Search</button>
                    <input type="text" name="query" placeholder="Search by Name" required>
                </div>
            </form>

        </div>
        <h2>Patients</h2>
        <table border="1">
            <tr>
                <th>Patient ID</th>
                <th>Name</th>
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
                    echo "<td><a href='view_details.php?PatientID=" . $row['PatientID'] . "'>View</a> | 
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
    </div>
</body>

>>>>>>> 46d2c6dc1852f4ac7e8a22c1ef868ebe5e0f597d
</html>