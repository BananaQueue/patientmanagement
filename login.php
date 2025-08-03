<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameuser = $_POST['userName'];
    $wordpass = $_POST['passWord'];

    include_once 'config.php';

    $sql = "SELECT * FROM users WHERE userName='$nameuser'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($wordpass, $row['passWord'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['userName'] = $nameuser;
            header("Location:http://localhost/patientMngmt/dashboard.php");
            exit;
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "Invalid username";
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bree+Serif&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="boxy">
        <h1>Login</h1>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label>Username:</label><br>
            <input type="text" name="userName" required><br>
            <label>Password:</label><br>
            <input type="password" name="passWord" required><br>
            <input type="submit" value="Login">
        </form>
        <h3 class="align-end"><a href="register.php">Register</h3>
    </div>

</body>

</html>