<<<<<<< HEAD
<?php
include_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    $sql = "INSERT INTO Users (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful";
        header("Location:http://localhost/patientMngmt/login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
=======
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
>>>>>>> 46d2c6dc1852f4ac7e8a22c1ef868ebe5e0f597d
