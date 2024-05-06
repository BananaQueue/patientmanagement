<?php
include_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['userName'];
    $password = password_hash($_POST['passWord'], PASSWORD_DEFAULT); // Hash the password

    $sql = "INSERT INTO Users (userName, passWord) VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful";
        header("Location:http://localhost/patientMngmt/login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
