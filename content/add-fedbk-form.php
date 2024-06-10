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

            /* body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                padding: 20px;
            } */
            form {
                background-color: #fff;
                padding: 20px;
                margin: 50px 50px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            label {
                display: block;
                margin-top: 10px;
            }
            input[type="text"],
            input[type="email"],
            textarea,
            input[type="file"] {
                width: 100%;
                padding: 8px;
                margin-top: 5px;
                border-radius: 4px;
                border: 1px solid #ddd;
                box-sizing: border-box; /* Makes sure the padding doesn't affect the final computed width */
            }
            textarea {
                height: 100px;
            }
            input[type="submit"] {
                background-color: #0056b3;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                margin-top: 20px;
            }
            input[type="submit"]:hover {
                background-color: #004494;
            }
        </style>    
    </head>
    <body>
        <?php require_once "header2.php"; ?>
        
        <form action="add-fedbk-form.php" method="post" enctype="multipart/form-data">
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="country">Country:</label>
            <input type="text" id="country" name="country" required><br>

            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" required></textarea><br>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*"><br>

            <input type="submit" name="submit" value="Submit Feedback">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            // Database connection
            $conn = new mysqli('localhost:3308', 'root', '', 'tourwithRK');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Escape user inputs for security
            $username = $conn->real_escape_string($_POST['username']);
            $email = $conn->real_escape_string($_POST['email']);
            $country = $conn->real_escape_string($_POST['country']);
            $feedback = $conn->real_escape_string($_POST['feedback']);
            // Assuming you're saving the path of the uploaded image in the database
            //$uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/tourwithRK/content/upload/'; // Absolute path to the upload directory
            $uploadDir = '/tourwithRK/content/upload/';
            $imagePath = $uploadDir . basename($_FILES['image']['name']);

            // Check if upload directory exists or try to create it
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Attempt to move uploaded file to a designated path
            if (move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] .$imagePath)) {
                // Prepare an insert statement
                $sql = "INSERT INTO feedback (username, email, country, feedback, image_path) VALUES ('$username', '$email', '$country', '$feedback', '$imagePath')";

                if ($conn->query($sql) === TRUE) {
                    echo "Feedback submitted successfully.";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Error uploading image.";
            }

            $conn->close();
        }
        ?>
    </body>
</html>