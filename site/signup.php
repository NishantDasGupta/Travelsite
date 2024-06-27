<?php
// Database configuration
$servername = "localhost"; // Usually "localhost"
$username = "root"; // MySQL username
$password = ""; // MySQL password
$dbname = "travel"; // Database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $dob = $conn->real_escape_string($_POST['dob']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm-password']);

    // Validate passwords match
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Hash the password for security
    // You should use a secure hashing function like password_hash
    $hashed_password = $password;

    // SQL query to insert the user data into the database
    $sql = "INSERT INTO user (name, email, dob, password) VALUES ('$name', '$email', '$dob', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // After successful registration, log in the user
        session_start();

        // Retrieve the newly inserted user's ID
        $user_id = $conn->insert_id;

        // Set session variables for logged in state
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $name;

        // Redirect to the home page or a logged-in page
        header("Location: index.php"); // Adjust this as needed
        exit(); // Ensure script stops after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
