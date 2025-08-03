<<<<<<< HEAD
<?php
include_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admission_id = $_POST['AdmissionID'];
    $discharge_time = $_POST['DateTimeDischarge'];

    // Check if the selected admission is active
    $sql = "SELECT * FROM Admissions WHERE AdmissionID=$admission_id AND DateTimeDischarge IS NULL"; // Only select active admissions
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Admission is active, proceed with discharge
        $update_sql = "UPDATE Admissions SET DateTimeDischarge='$discharge_time' WHERE AdmissionID=$admission_id";

        if (mysqli_query($conn, $update_sql)) {
            echo "Patient discharged successfully";
            $DateTimeAdmission = "";
            header("Location:http://localhost/patientMngmt/fetch_admissions.php");
        } else {
            echo "Error discharging patient: " . mysqli_error($conn);
        }
    } else {
        // Admission is not active or already discharged
        echo "Error: Selected admission is not active or has already been discharged";
    }
}

mysqli_close($conn);
=======
<?php
include_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admission_id = $_POST['AdmissionID'];
    $discharge_time = $_POST['DateTimeDischarge'];

    // Check if the selected admission is active
    $sql = "SELECT * FROM Admissions WHERE AdmissionID=$admission_id AND DateTimeDischarge IS NULL"; // Only select active admissions
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Admission is active, proceed with discharge
        $update_sql = "UPDATE Admissions SET DateTimeDischarge='$discharge_time' WHERE AdmissionID=$admission_id";

        if (mysqli_query($conn, $update_sql)) {
            echo "Patient discharged successfully";
            $DateTimeAdmission = "";
            header("Location:http://localhost/patientMngmt/fetch_admissions.php");
        } else {
            echo "Error discharging patient: " . mysqli_error($conn);
        }
    } else {
        // Admission is not active or already discharged
        echo "Error: Selected admission is not active or has already been discharged";
    }
}

mysqli_close($conn);
>>>>>>> 46d2c6dc1852f4ac7e8a22c1ef868ebe5e0f597d
