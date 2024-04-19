<?php
include 'config.php';

$PatientID = $_GET['PatientID'];

$sql = "SELECT * FROM patients WHERE PatientID = $PatientID";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Patient</title>
</head>

<body>
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
        <textarea name="Address" required>  <?php echo $row['Address']; ?> </textarea><br>

        <button type="submit">Update</button>
    </form>
</body>

</html>