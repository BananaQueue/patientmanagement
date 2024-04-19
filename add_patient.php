<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add New Patient</title>
</head>

<body>
    <h1>Add New Patient</h1>

    <form action="process_add_patient.php" method="POST">
        <label for="FirstName">First Name:</label>
        <input type="text" name="FirstName" required><br>

        <label for="MiddleName">Middle Name:</label>
        <input type="text" name="MiddleName"><br>

        <label for="LastName">Last Name:</label>
        <input type="text" name="LastName" required><br>

        <label for="Suffix">Suffix:</label>
        <input type="text" name="Suffix"><br>

        <label for="DateOfBirth">Date of Birth:</label>
        <input type="date" name="DateOfBirth" required><br>

        <label for="Address">Address:</label>
        <textarea name="Address" required></textarea><br>

        <button type="submit">Add Patient</button>
    </form>
</body>

</html>