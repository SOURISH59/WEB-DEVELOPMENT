<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.html"); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Hostel Allocation System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Dashboard</h1>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="allocations.html">View Allocations</a></li>
            <li><a href="feedback.html">Feedback</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>

<div class="content">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>This is your dashboard. Here you can manage your hostel allocation tasks.</p>
</div>

</body>
</html>
