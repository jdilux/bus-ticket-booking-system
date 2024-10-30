<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Establish a database connection
    $conn = new mysqli("localhost", "root", "", "Abirami");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $name = $_POST['name'];
    $cardnumber = $_POST['cardnumber'];
    $expirydate = $_POST['expirydate'];
    $cvv = $_POST['cvv'];

    // Sanitize and validate data (you should add more validation)
    $name = mysqli_real_escape_string($conn, $name);
    $cardnumber = mysqli_real_escape_string($conn, $cardnumber);
    $expirydate = mysqli_real_escape_string($conn, $expirydate);
    $cvv = mysqli_real_escape_string($conn, $cvv);

    // Insert data into the database
    $sql = "INSERT INTO payment_info (name, cardnumber, expirydate, cvv) VALUES ('$name', '$cardnumber', '$expirydate', '$cvv')";

    if ($conn->query($sql) === TRUE) {
        echo "Payment information has been successfully submitted to the database.";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
?>
