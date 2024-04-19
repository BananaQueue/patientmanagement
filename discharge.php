<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Discharge Patient</title>
</head>

<body>
    <h1>Discharge Patient</h1>

    <form action="process_discharge.php" method="POST">
        <label for="PatientID">Patient ID:</label>
        <input type="text" name="PatientID" required><br>

        <label for="DateTimeAdmission">Admission ID:</label>
        <input type="text" name="DateTimeAdmission" required><br>

        <label for="DateTimeDischarge">Discharge Date:</label>
        <input type="date" name="DateTimeDischarge" required><br>

        <button type="submit">Discharge Patient</button>
    </form>
</body>

</html>