<?php
include_once 'config.php';

// session_start();
// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
//     header("Location:http://localhost/patientMngmt/login.php");
//     exit;
// }

if (isset($_POST['query'])) {
    $query = $_POST['query'];
    $sql = "SELECT * FROM Patients WHERE FirstName LIKE '%$query%' OR LastName LIKE '%$query%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<li>' . $row['FirstName'] . ' ' . $row['LastName'] . '</li>';
        }
        echo '</ul>';
    } else {
        echo 'No results found';
    }
} else {
    echo 'Invalid request';
}

mysqli_close($conn);
