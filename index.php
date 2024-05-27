<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tour With RK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .mySlides {display:none}
            .w3-left, .w3-right, .w3-badge {cursor:pointer}
            .w3-badge {height:13px;width:13px;padding:0}
        </style>
    </head>
    <body>

    <?php require_once "content/header.php"; ?>

    <div class="container main">
        <div class="test">
            <div class="cover">
                <img class="mySlides" src="img/ask2.png" style="width:100%">
                <img class="mySlides" src="img/ask1.png" style="width:100%">
                <img class="mySlides" src="img/ask3.png" style="width:100%">
            </div>
            <div class="dot" style="width:100%">
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
            </div>
            <div class="info-box">
                <div class="travel-info">
                    <h2>Explore  with Confidence</h2>
                    <p>
                        With my extensive experience as a trusted tourist driver, we ensure your holiday experience is both exciting and compliant with recommended health guidelines. From airport pick-up to drop-off, we take care of all the details, allowing you to fully enjoy your personalized journey. 
                    </p>
                    <p id="strong-line"><strong>Just book your flight & let us handle the rest.</strong></p>
                    <!-- <p><strong>Contact us for step-by-step instructions:</strong></p> -->
                    <p>
                        <strong>WhatsApp:</strong> +94 721058986<br>
                        <strong>Email:</strong> <a href="mailto:info@tourwithrk.com">info@tourwithrk.com</a>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="about-box">
            <div class="left-col">
                <div class="scroll-box">
                    
                    <div id="click-newYear"> <img src="img/back.png" alt="events"> </div>
                    <div id="click-vesak"> <img src="img/back.png" alt="events"> </div>
                    <div id="click-poson"> <img src="img/back.png" alt="events"> </div>
                    <div id="click-perehera"> <img src="img/back.png" alt="events"> </div>
                </div>
            </div>
            <div class="right-col">
                <div id="newYear">
                    Happy New Year
                    <button id="close-btn1"><img src="img/exit.png" alt=""></button>
                </div>
                <div id="vesak">
                    Vesak
                    <button id="close-btn2"><img src="img/exit.png" alt=""></button>
                </div>
                <div id="poson">
                    Poson
                    <button id="close-btn3"><img src="img/exit.png" alt=""></button>
                </div>
                <div id="perehera">
                    Perehara
                    <button id="close-btn4"><img src="img/exit.png" alt=""></button>
                </div>
                <div id="aboutlanka">
                    Welcome to Sri Lanka
                </div>
            </div>
        </div>

        <div class="content-box">
            <h2>Our Services</h2>
            <div class="content">
                <div class="service-box">
                    <img src="img/1.png" alt="Service 1">
                    <h3>Transportation</h3>
                    <p>Efficient, reliable, and safe transportation services for all your travel needs. From airport pick-up to drop-off, we provide a variety of vehicle options to suit your requirements.</p>
                </div>
                <div class="service-box">
                    <img src="img/2.png" alt="Service 2">
                    <h3>Accommodation</h3>
                    <p>Book your stay at the finest hotels, resorts, and guesthouses across the island. We offer a range of accommodation options to suit your budget and preferences.</p>
                </div>
                <div class="service-box">
                    <img src="img/3.png" alt="Service 3">
                    <h3>Adventure Tours</h3>
                    <p>Embark on thrilling adventures and explore the hidden gems of Sri Lanka with our custom tour packages. Experience the best of the island’s natural beauty, wildlife, and culture.</p>
                </div>
                <div class="service-box">
                    <img src="img/4.png" alt="Service 4">
                    <h3>Guided Tours</h3>
                    <p>Discover the rich history, culture, and attractions of Sri Lanka with our expert tour guides. Enjoy a personalized tour experience that caters to your interests and preferences.</p>
                </div>
            </div>
        </div>
    </div>


    <?php require_once "content/footer.php"; ?>
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
        
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
        showDivs(slideIndex += n);
        }

        function currentDiv(n) {
        showDivs(slideIndex = n);
        }

        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " w3-white";
        }

    </script>
    
    <script src="js/smovePane.js"></script>
    </body>
</html>