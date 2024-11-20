<?php
session_start();

// Mock database of users (replace with actual database query)
$users = [
    'admin' => 'password123',
    'student1' => 'student123',
    'student2' => 'student456'
];

// Retrieve form data
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Validate login
if (isset($users[$username]) && $users[$username] === $password) {
    // Store username in session
    $_SESSION['username'] = $username;

    // Redirect to Dashboard
    header("Location: dashboard.php");
    exit();
} else {
    // Invalid credentials
    echo "<p style='color: red; text-align: center;'>Invalid username or password. Please try again.</p>";
    echo "<p style='text-align: center;'><a href='login.html'>Back to Login</a></p>";
}
?>
