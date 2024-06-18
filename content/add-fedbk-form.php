<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Submit Feedback</title>
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
        .container-to-form {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 50px 100px;
        }
        .form-introduction{
            flex: 30%;
            padding: 20px;
        }
        form {
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 0 10px #ccc;
            border-radius: 5px;
            width: 70%; /* Adjust the width as needed */
            max-width: 600px; /* Ensures the form is not too wide on larger screens */
            flex: 70%;
        }
        label, input, textarea {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        input, textarea {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        @media (max-width: 600px) {
            .container-to-form {
                margin: 20px;
                flex-direction: column;
            }
            .form-introduction{
                flex: 40%;
                padding: 20px;
            }
            form {
                width: 90%; 
            }
            label, input, textarea {
                margin-bottom: 1px;
            }
            input, textarea {
                padding: 2px;
            }
        }
    </style>    
</head>
<body>
    <?php require_once "header2.php"; ?>

    <div class="container-to-form">
        <!-- Introduction or context for the feedback form -->
        <div class="form-introduction">
            <h2>We'd Love to Hear From You!</h2>
            <p>Please fill out the form below to submit your feedback. Your insights are invaluable to us.</p>
        </div>

        <form action="add-fedbk-form.php" method="post" enctype="multipart/form-data">
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="country">Country:</label>
            <input type="text" id="country" name="country" required><br>

            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" required></textarea><br>
            
            <!-- Your existing form fields -->
            <label for="sex" style="font-weight:bold">Sex:</label>
            <table style="margin-bottom: 10px;">
                <tr>
                    <td>Male</td>
                    <td><input type="radio" id="male" name="sex" value="male" required></td>
                </tr>
                <tr>
                    <td> Female</td>
                    <td><input type="radio" id="female" name="sex" value="female" required></td>
                </tr>
            </table>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*"><br>

            <input type="submit" name="submit" value="Submit Feedback">
        </form>
    </div>

        <?php
        // error_reporting(0);
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
            $sex =  $conn->real_escape_string($_POST['sex']);

            $emailCheckSql = "SELECT email FROM feedback WHERE email = '$email'";
            $emailCheckResult = $conn->query($emailCheckSql);
            
            if ($emailCheckResult->num_rows > 0) {
                echo "Error: The email address already exists. Or fill all the fields.";
            } else {
                // Your existing code for file upload and insert statement
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
            
                if (move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $imagePath)) {
                    $sql = "INSERT INTO feedback (username, email, country, feedback, image_path) VALUES ('$username', '$email', '$country', '$feedback', '$imagePath')";
            
                    if ($conn->query($sql) === TRUE) {
                        echo "Feedback submitted successfully.";
                    } else {
                        echo "Error: " . $conn->error;
                    }
                } else {
                    if ($sex == 'female') {
                        $imagePath = '/tourwithRK/content/upload/girl.png';
                    } else {
                        $imagePath = '/tourwithRK/content/upload/man.png';
                    }
                    $sql = "INSERT INTO feedback (username, email, country, feedback, image_path) VALUES ('$username', '$email', '$country', '$feedback', '$imagePath')";
            
                    if ($conn->query($sql) === FALSE) {
                        echo "Error: " . $conn->error;
                    } else {
                        echo "Feedback submitted successfully.";
                    }
                }
            }
            
            $conn->close();
        }
        ?>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                window.onscroll = function() {myFunction2()};
                var navbar = document.getElementById("myTopnav");
                var sticky = navbar.offsetTop;

                function myFunction2() {
                    if (window.pageYOffset >= sticky) {
                        navbar.classList.add("sticky");
                    } else {
                        navbar.classList.remove("sticky");
                    }
                }

            });
            
            function fun_visible(){
                console.log("eer");
                var navItems = document.querySelectorAll('#myTopnav ul li:not(:first-child)');
                navItems.forEach(function(item) {
                    if (item.style.display === "none") {
                        item.style.display = "block";
                        console.log("Unhidden:", item);
                    } else {
                        item.style.display = "none";
                        console.log("Hidden:", item);
                    }
                });  
            }
            

        </script>
    </body>
</html>