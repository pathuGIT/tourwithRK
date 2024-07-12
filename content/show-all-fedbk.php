<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tour With RK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Read feedback from travelers who have experienced tours with RK. Discover their stories and insights to help you plan your next adventure.">
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

            .introduction {
                text-align: center;
                margin: 20px 10px;
                font-family: 'Courier New', Courier, monospace;
            }
            .introduction p {
                font-size: 1em;
                color: #333;
                width: 50%; /* Adjust based on your preference */
                margin: 0 auto;
            }
            .feedback-container {
                max-height: 600px; /* Adjust based on your preference */
                overflow-y: auto; /* Enables vertical scrolling */
                padding: 10px;
                border: 1px solid #ccc; /* Optional: adds a border */
                width: 80%; /* Adjust based on your preference */
                margin: 50px auto;
            }

            .feedback {
                border-bottom: 1px solid #eee; /* Adds a separator between feedback entries */
                padding-bottom: 10px;
                margin-bottom: 10px;
                display: flex;
                flex-direction: row-reverse;
                align-items:center;
                cursor: pointer;
                justify-content: left;
            }
            .feedback:hover {
                background-color: #f9f9f9; /* Adds a hover effect */
            }
            .feedback .data-box {
                flex: 1;
                padding: 10px;
            }
            .feedback .imge-box {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                overflow: hidden;
                margin-right: 20px;
                border: 1px solid #ccc;
            }
            .feedback .imge-box img{
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            @media (max-width: 600px) {
                .introduction h1{
                    font-size: 5vw;
                    margin-left: 15px;
                    font-weight: bold;
                    text-align: left;
                }
                .introduction p {
                    text-align: justify;
                    width: 90%; 
                }
                .feedback-container {
                    width: 90%; /* Adjust based on your preference */
                    margin: 0 auto;
                }
                .feedback .imge-box {
                    width: 50px;
                    height: 50px;
                }
            }
        </style>
    </head>
    <body>
        <?php require_once "header2.php"; ?>

        <!-- Introduction Section -->
        <section class="introduction">
            <h1>Welcome to Our Feedback Page</h1>
            <p>Here, we showcase the valuable feedback from our users. Each entry reflects the experiences and thoughts of our community members. Scroll down to read what they have to say about their experiences.</p>
        </section>

        <div class="feedback-container">
            <?php
            // Database connection
            $conn = new mysqli('localhost:3308', 'root', '', 'tourwithRK');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch feedback
            $sql = "SELECT username, email, country, feedback, image_path FROM feedback where `check` = 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Display each feedback
                while($row = $result->fetch_assoc()) {
                    echo "<div class='feedback'>";
                    echo "<div class='data-box'>";
                    echo "<p><strong>Name:</strong> " . $row["username"] . "</p>";
                    echo "<p><strong>Country:</strong> " . $row["country"] . "</p>";
                    echo "<p><strong>Feedback:</strong> " . $row["feedback"] . "</p>";
                    echo "</div>";
                    echo "<div class='imge-box'><img src='" . $row["image_path"] . "' alt='Feedback Image' style='width:100%;max-width:200px;'> </div>";
                    //echo "<img src= '/tourwithRK/content/upload/IMG-20230806-WA0011.png' alt='Feedback Image' style='width:100%;max-width:200px;'>";
                    echo "</div>";
                }
            } else {
                echo "No feedback found.";
            }
            $conn->close();
            ?>
        </div>


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