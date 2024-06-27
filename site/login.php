<?php
session_start();

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

// Process login when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $conn->real_escape_string($_POST['email1']);
    $password = $_POST['password'];

    // Fetch the user from the database
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verify the password
        if ($password && $user['password']) {
            // Store user data in the session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            // Redirect to the protected area
            echo "success.";
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this email.";
    }
}

// Close the connection
$conn->close();
