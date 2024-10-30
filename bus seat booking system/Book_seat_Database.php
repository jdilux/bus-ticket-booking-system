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
    $from = $_POST['From'];
    $to = $_POST['TO'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $noOfSeats = $_POST['no-of-seats'];

    // Retrieve the selected seat from the hidden input field
    if (isset($_POST['selectedSeat']) && !empty($_POST['selectedSeat'])) {
        $selectedSeat = $_POST['selectedSeat'];
        
        // Insert data into the database
        $sql = "INSERT INTO booking (`Departure point`, `Destination point`, `Date`, `Time`, `No of Seats`, `Seat no`) VALUES ('$from', '$to', '$date', '$time', '$noOfSeats', '$selectedSeat')";
    
        if ($conn->query($sql) === TRUE) {
            echo "Form data inserted successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } 
    else {
        echo "Please select a seat.";
    }

    // Close the database connection
    $conn->close();
?>
