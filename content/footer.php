
<style>
    footer:not(:last-child) {
        background-color:	#1a5a74;
        color: white;
        padding: 20px;
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
    }
    .footer-section {
        margin: 10px;
        text-align: left;
    }
    .footer-section h4, .footer-section p, .footer-section a {
        color: white;
    }
    .date-time {
        text-align: right;
    }
    footer p{
        display: block;
    }
    

    @media only screen and (max-width: 600px) {
        footer {
            flex-direction: column;
            text-align: center;
            background-color: #1c818f;
        }
        .footer-section {
            width: 100%;
            margin: 10px 10px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.358);
            img{
                margin-bottom: 10px;
            }
            a,p{
                font-size: 14px;
            }
            h4{
                text-align: center;
                font-weight: bold;
            }
            padding-bottom: 5px;
        }
        .footer-section:nth-child(4){
            padding-bottom: 30px;
        }
        .date-time p{
            text-align: left;
        }
        .date-time {
            text-align: center;
        }
        .copyright{
            font-size: 20px;
        }
    }
</style>

<?php
    // Set the default timezone to Sri Lanka
    date_default_timezone_set('Asia/Colombo');

    // Function to add the ordinal suffix to a number
    function addOrdinalSuffix($num) {
        if (!in_array(($num % 100), array(11,12,13))){
            switch ($num % 10) {
                // Handle 1st, 2nd, 3rd
                case 1:  return $num.'st';
                case 2:  return $num.'nd';
                case 3:  return $num.'rd';
            }
        }
        return $num.'th';
    }

    // Get the current date and time
    $day = addOrdinalSuffix(date('j')); // Day of the month with ordinal suffix
    $month = date('F'); // Full month name
    $year = date('Y'); // 4 digit year
    $time = date('h:i:s A'); // Time in 12-hour format with AM/PM
?>


<footer>
    <div class="footer-section">
        <img src="/tourwithRK/img/logo.png" alt="Logo" style="max-width: 100px;">
        <p>Ahangama, Sri Lanka</p>
        <p>Whatsapp: <a href="tel:+94765690030">+94765690030</a></p>
    </div>
    <div class="footer-section">
        <h4>Quick Links</h4>
        <a href="/tourwithRK/index.php">Home</a> |
        <a href="/tourwithRK/content/service.php">Services</a><br>
        <a href="/tourwithRK/content/service.php#section-right">Informed Us Form</a><br>
        <a href="/tourwithRK/content/service.php#day-tour">Day Tours</a><br>
        <a href="/tourwithRK/content/contact.php">Contact Us</a>
    </div>
    <div class="footer-section date-time">
        <?php echo "<p>{$day} {$month}, {$year}<br>Sri Lanka Time: {$time}</p>"; ?>
    </div>
    <div id="admin-login" class="footer-section">
        <h4>Login</h4>
        <form action="/tourwithRK/nimda/nimda-login.php" method="post" style="max-width: 300px; margin: auto;">
            <input type="text" name="username" placeholder="Username" required style="width: 100%; padding: 10px; margin: 10px 0; box-sizing: border-box;">
            <input type="password" name="password" placeholder="Password" required style="width: 100%; padding: 10px; margin: 10px 0; box-sizing: border-box;">
            <!-- <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none;">Login</button> -->
            <input type="submit" name="submit" value="Login" style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none;">
        </form>
    </div>
    
</footer>
<p clas="copyright" style="display:block;text-align: center; padding:10px; background-color: #0c3f53; color:white">&copy; 2023 Your <a href="/tourwithRK/index.php">tourwithRK</a>. All rights reserved.</p>
