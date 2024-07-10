<?php

    // Create connection
    $conn = new mysqli('localhost:3308', 'root', '', 'tourwithRK');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['feedback_id'])) {
        $feedback_id = $_GET['feedback_id'];

        // Delete the feedback
        $sql = "DELETE FROM feedback WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $feedback_id);
        $stmt->execute();

        echo "<script>alert('Feedback deleted.'); window.location.href='admin.php';</script>";
    }

    $conn->close();
?>