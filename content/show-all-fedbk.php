<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tour With RK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="..//css/index.css">
        <link rel="stylesheet" type="text/css" href="..//css/in-responsive.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&display=swap" rel="stylesheet">
        <style>
            .mySlides {display:none}
            .w3-left, .w3-right, .w3-badge {cursor:pointer}
            .w3-badge {height:13px;width:13px;padding:0}

            .feedback-container {
                max-height: 600px; /* Adjust based on your preference */
                overflow-y: auto; /* Enables vertical scrolling */
                padding: 10px;
                border: 1px solid #ccc; /* Optional: adds a border */
                margin: 20px 0;
            }

            .feedback {
                border-bottom: 1px solid #eee; /* Adds a separator between feedback entries */
                padding-bottom: 10px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <?php require_once "header2.php"; ?>

        <div class="feedback-container">
            <?php
            // Database connection
            $conn = new mysqli('localhost:3308', 'root', '', 'tourwithRK');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch feedback
            $sql = "SELECT username, email, country, feedback, image_path FROM feedback";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Display each feedback
                while($row = $result->fetch_assoc()) {
                    echo "<div class='feedback'>";
                    echo "<p><strong>Name:</strong> " . $row["username"] . "</p>";
                    echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                    echo "<p><strong>Country:</strong> " . $row["country"] . "</p>";
                    echo "<p><strong>Feedback:</strong> " . $row["feedback"] . "</p>";
                    echo "<img src='" . $row["image_path"] . "' alt='Feedback Image' style='width:100%;max-width:200px;'>";
                    //echo "<img src= '/tourwithRK/content/upload/IMG-20230806-WA0011.png' alt='Feedback Image' style='width:100%;max-width:200px;'>";
                    echo "</div>";
                }
            } else {
                echo "No feedback found.";
            }
            $conn->close();
            ?>
        </div>

    </body>
</html>