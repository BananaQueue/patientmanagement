<?php
include_once 'config.php';
$PatientID = isset($_GET['PatientID']) ? $_GET['PatientID'] : null;
//session_start();
// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
//     header("Location:http://localhost/patientMngmt/login.php");
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Search</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div>
        <h2>Patient Search</h2>
        <form action="process_add_admission.php" method="POST">
            <input type="text" id="searchInput" name="PatientID" placeholder=" Search for patients...">
            <div id="searchResults"></div>
            <label for="Ward">Ward:</label>
            <input type="text" name="Ward" required><br>
            <label>Admission Date and Time:</label><br>
            <input type="datetime-local" name="DateTimeAdmission" required><br>

            <button type="submit">Admit Patient</button>
        </form>
        <div>
            <h2><a href='dashboard.php'>Go Home</a> | <a href="#" onclick="history.go(-1)">Go Back</a> </h2>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#searchInput').on('input', function() {
                var query = $(this).val();
                if (query !== '') {
                    $.ajax({
                        url: 'search_patients.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('#searchResults').html(data);
                        }
                    });
                } else {
                    $('#searchResults').html('');
                }
            });

            // Handle selection from the dropdown
            $('#searchResults').on('click', 'li', function() {
                var selectedPatient = $(this).text();
                var patientID = $(this).data('patientid');

                // AJAX request to pass PatientID to PHP script
                $.ajax({
                    url: 'store_patient_id.php',
                    method: 'POST',
                    data: {
                        patientID: patientID
                    },
                    success: function(response) {
                        // Response handling if needed
                    }
                });

                $('#searchInput').val(selectedPatient);
                $('#searchResults').html('');
            });
        });
    </script>
</body>

</html>