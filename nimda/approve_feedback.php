<?php

// Create connection
$conn = new mysqli('localhost:3308', 'root', '', 'tourwithRK');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback_id = $_POST['feedback_id'];
    $action = $_POST['action'];

    if ($action == "Approve") {
        // Update the feedback to approved
        $sql = "UPDATE feedback SET `check` = 1 WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $feedback_id);
        $stmt->execute();

        echo "<script>alert('Successfully approved.'); window.location.href='admin.php';</script>";
    } elseif ($action == "Not Approve") {
        // Prompt for deletion or do nothing
        echo "<script>
                var confirmDeletion = confirm('Do you want to delete this feedback?');
                if (confirmDeletion) {
                    // If user confirms deletion, send a request to delete
                    window.location.href='delete_feedback.php?feedback_id=" . $feedback_id . "';
                } else {
                    // If user cancels, refresh the page
                    window.location.href='admin.php';
                }
              </script>";
    }
}

$conn->close();
?>