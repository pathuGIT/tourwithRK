
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tour With RK| Services </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="..//css/index.css">
        <link rel="stylesheet" type="text/css" href="..//css/servise.css">
        <link rel="stylesheet" type="text/css" href="..//css/in-responsive.css">
        <link rel="stylesheet" type="text/css" href="..//css/service-responsive.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&display=swap" rel="stylesheet">
        <style>
        
        </style>
    </head>
    
    <body>
        <?php require_once "header2.php"; ?>
        <div class="container">
            <div class="section-left">
                <h2 class="top-h2">Explore Our Tour Vehicle Options</h2>
                <div class="selection">
                    <div class="service" id="car">
                        <img src="/tourwithRK/img/transport/car2.png" alt="Car" style="width:100%;max-width:300px;">
                        <p>Choose a comfortable car for your tour. Ideal for small groups or couples.</p>
                    </div>
                    <div class="service" id="van">
                        <img src="/tourwithRK/img/transport/van1.png" alt="Van" style="width:100%;max-width:300px;">
                        <p>Opt for a spacious van for larger groups. Perfect for family tours.</p>
                    </div>
                </div>
                
                <div class="day-tour" id="day-tour">
                    <!-- <p>Day Tours</p>
                    <p class="introduction">We offer guided day trips and excursions to most popular attractions and also to lesser known but very adventurous and authentic attractions of Sri Lanka. These day tours designed for those who have limited time to explore Sri Lanka’s must visit tourist attractions. These are mainly day trips in Sri Lanka that start and end in Colombo, Negombo or in Colombo airport, where the tourist is expected to purchase entrance tickets and meals. Rates includes transfers in an air conditioned private vehicles driven by English speaking tourist chauffeurs.</p> -->

                    <h1>Day Tours in Sri Lanka</h1>

                    <h2>Introduction</h2>
                    <p>Explore Sri Lanka's top attractions with our guided day tours, perfect for travelers with limited time. Our tours cover both popular and off-the-beaten-path destinations, starting and ending in Colombo, Negombo, or Colombo airport.</p>

                    <h2 style="margin-top:50px; ">Highlights of the Tours</h2>
                    
                    <h3>Popular Attractions</h3>
                    <ul>
                        <li><strong>Sigiriya Rock Fortress</strong>: Visit this UNESCO site for stunning views and history.</li>
                        <li><strong>Dambulla Cave Temple</strong>: Discover the impressive Buddhist art and statues.</li>
                        <li><strong>Kandy and the Temple of the Tooth</strong>: Experience Sri Lanka's cultural heart.</li>
                        <li><strong>Galle Fort</strong>: Stroll through charming colonial streets with seaside views.</li>
                    </ul>
                    
                    <h3 style="margin-top:40px;">Off-the-Beaten-Path Adventures</h3>
                    <ul>
                        <li><strong>Horton Plains National Park</strong>: Hike to World’s End for breathtaking views.</li>
                        <li><strong>Udawalawe National Park</strong>: Enjoy a safari with close encounters with wildlife.</li>
                        <li><strong>Ritigala Forest Monastery</strong>: Explore ancient ruins and lush surroundings.</li>
                        <li><strong>Kitulgala</strong>: Try thrilling water sports like white-water rafting.</li>
                    </ul>

                    <h2 style="margin-top:60px;">Why Choose Our Day Tours?</h2>
                    <ul>
                        <li><strong>Expert Guides</strong>: Knowledgeable and experienced.</li>
                        <li><strong>Customizable Itineraries</strong>: Tailored to your interests.</li>
                        <li><strong>Value for Money</strong>: Competitive rates and quality service.</li>
                        <li><strong>Safety and Comfort</strong>: Reliable vehicles and professional chauffeurs.</li>
                    </ul>

                    <h2 style="margin-top:60px;">Book Your Day Tour Today</h2>
                    <p>Make the most of your limited time in Sri Lanka with our guided day tours. Book now to explore the best attractions, whether you're interested in history, nature, or adventure.</p>

                    </div>
                    
        <?php require_once "footer.php"; ?>
            </div>
            
            <div class="section-right" id="section-right">
                <div class="fixed-section-right">
                    <p id="errmsg"></p>
                    <h2>Informed Us</h2>
                    <p>Please inform us of your arrival to Sri Lanka, and we will contact you soon:</p>
                    <form action="" method="post">
                        <table border="1">
                            <tr>
                                <td colspan="2"><label for="name">Full Name:</label></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="text" id="name" name="name" required style="width: 100%;"></td>
                            </tr>
                            <tr>
                                <td><label for="country">Your Country:</label></td>
                                <td><input type="text" id="country" name="country" required></td>
                            </tr>
                            <tr>
                                <td><label for="phone">WhatsApp No:</label></td>
                                <td><input type="text" id="phone" name="phone" required></td>
                            </tr>
                            <tr>
                                <td><label for="email">Email:</label></td>
                                <td><input type="email" id="email" name="email" required></td>
                            </tr>
                            <tr>
                                <td><label for="number">Number of Guests:</label></td>
                                <td><input type="number" id="number" name="number" required></td>
                            </tr>
                            <tr>
                                <td><label for="date">Date of Arrival:</label></td>
                                <td><input type="date" id="date" name="date" required></td>
                            </tr>
                            <tr>
                                <td><label for="vehicle">Vehicle:</label></td>
                                <td>
                                    <select name="vehicle" id="vehicle" required>
                                        <option value="car">Car</option>
                                        <option value="van">Van</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="Submit" style="width:100%"></td>
                            </tr>        
                        </table>
                    </form>
                </div>
            </div>
        </div>

        <?php
            // Database connection variables
            $servername = "localhost:3308";
            $username = "root";
            $password = "";
            $dbname = "tourwithRK";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Check if form is submitted
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Sanitize input data
                $name = $conn->real_escape_string($_POST['name']);
                $country = $conn->real_escape_string($_POST['country']);
                $phone = $conn->real_escape_string($_POST['phone']);
                $email = $conn->real_escape_string($_POST['email']);
                $number_of_guests = (int)$_POST['number'];
                $date_of_arrival = $conn->real_escape_string($_POST['date']);
                $vehicle = $conn->real_escape_string($_POST['vehicle']);

                // SQL to insert data
                $sql = "INSERT INTO bookings (name, country, phone, email, number_of_guests, date_of_arrival, vehicle) VALUES ('$name', '$country', '$phone', '$email', $number_of_guests, '$date_of_arrival', '$vehicle')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script>
                            document.getElementById('errmsg').innerHTML = 'Your booking has been submitted successfully!';
                            document.getElementById('errmsg').style.color = 'green';
                            setTimeout(function() {
                                window.location.href = '/tourwithRK/content/service.php';
                            }, 3000); // Redirect after 2 seconds
                        </script>";
                } else {
                    //echo "Error: " . $sql . "<br>" . $conn->error;
                    echo "<script>document.getElementById('errmsg').innerHTML = 'Your booking has Not Submitted!';  document.getElementById('errmsg').style.color = 'red';</script>";
                }
            }

            // Close connection
            $conn->close();
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

                
                // var navItems = document.querySelectorAll('#myTopnav ul li:not(:first-child)');
                // navItems.forEach(function(item) {
                //     item.style.display = "block";
                // });

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