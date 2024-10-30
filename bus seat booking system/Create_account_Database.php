<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Establish a database connection
    $conn = new mysqli("localhost", "root", "", "Abirami");

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle the form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $nicNumber = $_POST["NIC_Number"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $city = $_POST["city"];
        $gender = $_POST["gender"];
        
        // Check if the username is unique
        $checkUsernameQuery = "SELECT * FROM accounts WHERE Username = '$username'";
        $usernameResult = $conn->query($checkUsernameQuery);

        // Check if the email is unique
        $checkEmailQuery = "SELECT * FROM accounts WHERE Email = '$email'";
        $emailResult = $conn->query($checkEmailQuery);

        if ($usernameResult->num_rows > 0) {
            $errorMessage = "Username already exists. Please choose a different one.";
            header("Location: Create account.html");
            exit();
        }

        if ($emailResult->num_rows > 0) {
            $errorMessage = "Email address is already registered. Please use a different email.";
            header("Location: Create account.html");
            exit();
        }

        // If both username and email are unique, insert the data into the database
        $sql = "INSERT INTO accounts (`Name`, `NIC`, `Email`, `Username`, `Password`, `Phone`, `City`, `Gender`) VALUES ('$name', '$nicNumber', '$email', '$username', '$password', '$phone', '$city', '$gender')";

        if ($conn->query($sql) === TRUE) {
            $successMessage = "Account created successfully.";
            header("Location: Sign in.html");
            exit();
        } 
        else {
            $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
            header("Location: Create account.html");
            exit();
        }
    }

    // Close the database connection
    $conn->close();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Abirami Travels | Create account</title>
    </head>
    <body>
        <!-- Display the success message if it's not empty -->
        <?php if (!empty($successMessage)): ?>
            <script>
                alert("<?php echo $successMessage; ?>");
            </script>
        <?php endif; ?>

        <!-- Display the error message if it's not empty -->
        <?php if (!empty($errorMessage)): ?>
            <script>
                alert("<?php echo $errorMessage; ?>");
            </script>
        <?php endif; ?>
    </body>
</html>
