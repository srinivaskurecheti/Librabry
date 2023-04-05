<?php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get the form data
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to the database
    $servername = "localhost";
    $username = "newuser";
    $password = "password";
    $dbname = "details";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the data into the database
    $sql = "INSERT INTO login (fullname, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Return a success message to the AJAX request
        echo "Registered successfully!";
    } else {
        // Return an error message to the AJAX request
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}

?>

