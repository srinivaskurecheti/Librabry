<?php
// Database configuration
$servername = "localhost";
$username = "newuser";
$password = "password";
$dbname = "details";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user is already registered
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM login WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "User already registered. Please go to login page.";
    } else {
        // Insert user registration data into the database
        $fullname = $_POST['fullname'];
        $password = $_POST['password'];

        $sql = "INSERT INTO login (fullname, email, password)
        VALUES ('$fullname', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "Registration successful.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>

