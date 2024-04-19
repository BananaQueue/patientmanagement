<?php
include 'config.php';

$PatientID = $_GET['PatientID'];
// Check if the form is submitted for deletion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "DELETE FROM patients WHERE PatientID=$PatientID";

    if ($conn->query($sql) === TRUE) {
        echo "Patient deleted successfully";
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
    <title>Delete Patient</title>
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this patient record?");
        }
    </script>
</head>

<body>
    <h1>Delete Patient</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?PatientID=<?php echo $PatientID; ?>" method="post" onsubmit="return confirmDelete();">
        <input type="submit" value="Delete">
    </form>
</body>

</html>