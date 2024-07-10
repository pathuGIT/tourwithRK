<?php
// Create connection
$conn = new mysqli('localhost:3308', 'root', '', 'tourwithRK');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // TODO: Implement CSRF token verification here

    $booking_id = $_POST['booking_id'];
    $action = $_POST['action'];

    if ($action == "Accept") {
        // Update the feedback to approved
        $sql = "UPDATE bookings SET `status` = 'accepted' WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $booking_id);

        if ($stmt->execute()) {
            echo "<script> alert('Successfully Accepted.'); window.location.href='admin.php';</script>";
        } else {
            echo "<script> alert('Error: Could not execute the update.'); window.location.href='admin.php';</script>";
        }
    } else {
        // Handle other actions or unexpected values
    }
}