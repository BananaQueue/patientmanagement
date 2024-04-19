<?php
include 'config.php';

$PatientID = isset($_GET['PatientID']) ? $_GET['PatientID'] : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Patient Admission</title>
</head>

<body>
    <h1>Add Patient Admission</h1>

    <form action="process_add_admission.php" method="POST">
        <label for="PatientID">Patient ID:</label>
        <input type="text" name="PatientID" value="<?php echo $PatientID; ?>" required><br>

        <label for="DateTimeAdmission">Admission Date:</label>
        <input type="date" name="DateTimeAdmission" required><br>

        <label for="Ward">Ward:</label>
        <input type="text" name="Ward" required><br>

        <button type="submit">Admit Patient</button>
    </form>
</body>

</html>