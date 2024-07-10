<?php
        // First, check if the 'add-fedbk-form' button was clicked.
        if (isset($_POST['add-fedbk-form'])) {
            // Redirect the user to the new page.
            header('Location: content/add-fedbk-form.php');
            exit(); // Make sure no further code is executed after the redirect.
        }
?>
<?php
        // First, check if the 'add-fedbk-form' button was clicked.
        if (isset($_POST['show-fedbk'])) {
            // Redirect the user to the new page.
            header('Location: content/show-all-fedbk.php');
            exit(); // Make sure no further code is executed after the redirect.
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tour With RK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/in-responsive.css">
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
        </style>
    </head>
    <body>

    <?php require_once "content/header.php"; ?>

    <div class="container main">
        <div class="test">
            <div class="cover">
                <img class="mySlides" src="img/slideShow/ask2.png" style="width:100%">
                <img class="mySlides" src="img/slideShow/ask1.png" style="width:100%">
                <img class="mySlides" src="img/slideShow/ask3.png" style="width:100%">
            </div>
            <div class="dot" style="width:100%">
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
            </div>
            <div class="info-box">
                <div class="travel-info">
                    <h2>Explore  with Confidence</h2>
                    <!-- <p>
                        With my extensive experience as a trusted tourist driver, we ensure your holiday experience is both exciting and compliant with recommended health guidelines. From airport pick-up to drop-off, we take care of all the details, allowing you to fully enjoy your personalized journey. 
                    </p> -->
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

                    <div id="click-perehera"> 
                        <p>Kandy Perahera</p>
                        <img src="img/traditional/perahera.jpg" alt="events"> 
                    </div>
                    <div id="click-newYear"> 
                        <p>New Year</p>
                        <img src="img/traditional/aurudu.png" alt="events"> 
                    </div>
                    <div id="click-vesak"> 
                        <p>Vesak Poya Day</p>
                        <img src="img/traditional/vesak.jpg" alt="events"> 
                    </div>
                    <div id="click-poson"> 
                        <p>Vel Festival</p>
                        <img src="img/traditional/vel2.jpg" alt="events"> 
                    </div>
                </div>
            </div>
            <div class="right-col">
                
                <div class="shipt-box" id="perehera">
                    <div class="content-inside-perahera">
                        <button id="close-btn4" class="close-btn"><img src="img/exit.png" alt=""></button>
                        
                        <div><img src="img/traditional/kandy-perahera (2).jpg" alt="kandy perahera"></div>
                        <h2>Kandy Esala Perahera</h2>
                        <p>
                            The Kandy Dala Perahera is considered to be one of the most beautiful cultural events in Asia. The celebration is intended to honor the Sacred Tooth Relic and the found main guardian gods, Natha, Vishnu, Kataragama and Pattini. The colourful event consists of various types of dancers, drummers, fire-dancers, whip-dancers, and beautifully dressed elephants. The festival has three major processions, Kumbal Perahera, Randoli Perahera and Diya Kapeema (Water Cutting Ceremony) at the Mahaweli River at Getambe temple. The festival is a unique identity of Sri Lanka and a must see event.

                            <br><br>
                            The Kandy Esala Perahera, held annually in the city of Kandy, is one of Sri Lanka's most grand and vibrant festivals. This spectacular event, celebrated in the months of July and August, honors the Sacred Tooth Relic of Lord Buddha, enshrined at the Temple of the Tooth (Sri Dalada Maligawa).
                        </p>
                        <dl>
                            <dd>
                                <h3>Best Places to Watch:</h3>
                                <ul>
                                    <li><strong>Sri Dalada Maligawa (Temple of the Tooth):</strong> The heart of the festival, offering a prime viewing spot for the main procession.</li>
                                    <li><strong>Queen’s Hotel:</strong> Located in the heart of Kandy, this historic hotel offers a comfortable and elevated view of the processions.</li>
                                    <li><strong>Lake Club:</strong> Situated by the Kandy Lake, this spot provides a scenic backdrop and a great vantage point for the Perahera.</li>
                                    <li><strong>Y.M.B.A. (Young Men’s Buddhist Association) Building:</strong> Another excellent location offering close-up views of the vibrant parades.</li>
                                </ul>
                            </dd>
                        </dl>
                        <div class="last-img"><img src="img/traditional/kandy-perahera (1).jpg" alt=""></div>
                        
                    </div>
                </div>
                <div class="shipt-box" id="newYear">
                    <div class="content-inside-year">
                            <button id="close-btn1" class="close-btn"><img src="img/exit.png" alt=""></button>
                            
                            <div><img src="img/traditional/new-year.jpg" alt="kandy perahera"></div>
                            <h2>Celebrate the New Year with Sri Lankans</h2>
                            <p>
                                Experience the vibrant and joyous celebration of the Sri Lankan New Year, known as "Aluth Avurudda" in Sinhala and "Puthandu" in Tamil. This significant cultural event typically occurs in mid-April, marking the end of the harvest season and the beginning of the new year according to the Sinhala and Tamil solar calendar.
                                <br><br>
                            </p>
                            <div style="float: right; padding: 20px 0 30px 50px; "><img src="img/traditional/New-Year2.jpeg" alt=""></div>
                            <dl>
                                <dd>
                                    <h3>Festival Highlights:</h3>
                                    <ul>
                                        <li><strong>Traditional Customs:</strong> The heart of the festival, offering a prime viewing spot for the main procession.</li>
                                        <li><strong>Auspicious Times</strong> Located in the heart of Kandy, this historic hotel offers a comfortable and elevated view of the processions.</li>
                                        <li><strong>Games and Activities</strong> Situated by the Kandy Lake, this spot provides a scenic backdrop and a great vantage point for the Perahera.</li>
                                        <li><strong>Cultural Performances</strong> Another excellent location offering close-up views of the vibrant parades.</li>
                                    </ul>
                                </dd>
                            </dl>
                            
                    </div>
                </div>
                <div class="shipt-box" id="vesak">
                    <div class="content-inside-vesak">
                            <button id="close-btn2" class="close-btn"><img src="img/exit.png" alt=""></button>
                            
                            <div><img src="img/traditional/Vesak2.jpg" alt="kandy perahera"></div>
                            <h2>Poya Day Celebrations in Sri Lanka</h2>
                            <p>
                                Vesak Poya Day, also known simply as Vesak, is one of the most important and revered festivals in Sri Lanka. Celebrated in May, this day marks the birth, enlightenment, and passing away of Lord Buddha. It is a time for reflection, religious observances, and vibrant celebrations throughout the country.
                                <br><br>
                            </p>
                            <div style="float: right; padding: 20px 0 30px 50px; "><img src="img/traditional/vesak.jpg" alt=""></div>
                            <dl>
                                <dd>
                                    <h3>Special Poya Day Features:</h3>
                                    <ul>
                                        <li><strong>Religious Observances:</strong> Witness and participate in special prayers, meditation sessions, and alms-giving ceremonies. Temples hold Dhamma sermons and Sil campaigns, where devotees observe precepts and engage in spiritual practices.</li>
                                        <li><strong>Lantern Displays:</strong> Particularly during Vesak Poya, temples and streets are decorated with beautiful Vesak lanterns and illuminations, creating a magical ambiance.</li>
                                        <li><strong>Pandals (Thorana):</strong> Large, elaborately decorated structures depicting scenes from the Buddha's life are erected, especially during Vesak and Poson Poya. These pandals are illuminated at night and attract many visitors.</li>
                                        <li><strong>Cultural Performances:</strong> Enjoy traditional dances, drumming, and music performances that are often organized around temples during Poya celebrations. These performances showcase Sri Lanka's rich cultural heritage.</li>
                                        <li><strong>Dansal (Almsgiving Stalls):</strong> Experience the Sri Lankan tradition of Dansal, where free food and drinks are distributed to the public as an act of generosity and community spirit.</li>
                                    </ul>
                                </dd>
                            </dl>
                            <div class="last-img">
                                <img src="img/traditional/vesak5.jpg" alt="">
                                <img src="img/traditional/Vesak4.jpg" alt="">
                                <img src="img/traditional/Vesak3.jpg" alt="">
                            </div>
                            
                    </div>
                </div>
                <div class="shipt-box" id="poson">
                    <div class="content-inside-poson">
                            <button id="close-btn3" class="close-btn"><img src="img/exit.png" alt=""></button>
                            
                            <div><img src="img/traditional/vel.jpg" alt="kandy perahera"></div>
                            <h2>Vel Festival</h2>
                            <p>
                            It is one of Sri Lanka’s most major Hindu and cultural celebrations. For the war-god Skandha and his trident, the event is crucial (Vel). To begin the ceremony, the Vel is paraded in a large golden chariot driven by white people who apply sacred ash to their faces. As the procession goes through the city, it is accompanied by dancers, elephants, and musicians, and Sri Lankans can hear religious melodies, bells, and drums. You’ll want to see more of the lovely parade and music. Every year in July or August, Colombo hosts this festival.
                                <br><br>
                            </p>
                            <div class="last-img">
                                <img src="img/traditional/vel3.jpg" alt="">
                            </div>
                            
                    </div>
                </div>
                <div class="shipt-box" id="aboutlanka">
                    <div class="content-inside-lanak" >
                        <div>
                            <h2>Welcome to Sri Lanka</h2>
                            <h3 id="ayubowan">Ayubowan</h3>
                        </div>
                        <p>
                            Sri Lanka is a tropical paradise that offers a unique blend of natural beauty, rich history, and vibrant culture. From pristine beaches and lush tea plantations to ancient temples and wildlife sanctuaries, the island has something for everyone. Whether you are looking for adventure, relaxation, or cultural experiences, Sri Lanka has it all. Let us help you discover the best of this enchanting island with our personalized tour packages.
                        </p>    
                        <div class="min-box">
                            <div><img src="img/traditional/galle-f.png" alt="" title="galle"></div>
                            <div>
                                <h3>The Gem of the Indian Ocean</h3>
                                <p>Experience Sri Lanka’s stunning beaches, lush jungles, and ancient wonders. Savor world-class cuisine, vibrant culture, and thrilling safaris. Your perfect paradise getaway awaits!</p>
                                
                            </div>
                            <div><img src="img/traditional/tw-elephant.png" alt="" title="Yale" ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="feedback-box">
            <h2>Feedback</h2>
            <form method="post">
                <button type="submit" name="add-fedbk-form" class="w3-button w3-black" style="margin-left: 30px;">  Add your Feedback </button>
            </form>
        
            <div class="content">
                <div class="service-box">
                    <div class="feed-img">
                        <img src="img/feddback/u1.jpg" alt="Service 1">
                    </div>
                    <h3>Hanny</h3>
                    <small>Germany</small>
                    <p>"Fair price, quick and trustful."</p>
                </div>
                <div class="service-box">
                    <div class="feed-img">
                        <img src="img/feddback/u2.jpg" alt="Service 1">
                    </div>
                    <h3>David</h3>
                    <small>Israel</small>
                    <p>"I" drived with lakshan from the airport and then when i came back, he is a great guy, kind and very friendly and smiling, he help and show me places in the way that worth stopping, i enjoy the ride with his comfortable car. I really recommend on him 👍"</p>      
                    </div>
                <div class="service-box">
                    <div class="feed-img">
                        <img src="img/feddback/girl.png" alt="Service 1">
                    </div>
                    <h3>Ganiliya virukoh</h3>
                    <small>Issrael</small>
                    <p>"He drives very well and carefully and is very"</p>
                </div>
                <div class="service-box">
                    <div class="feed-img">
                        <img src="img/feddback/man.png" alt="Service 1">
                    </div>
                    <h3>⁠Artamonov Evgeniy </h3>
                    <small>Russia</small>
                    <p>"Lakshan is responsible person. Driving fast and safely."</p>
                </div>
            </div>
            
            <form method="post">
                <button type="submit" name="show-fedbk" id="show-fedbk" class="show-fedbk w3-button w3-black w3-light-grey w3-mobile">View all feedbacks</button>
            </form>
        </div>
        <div class="faq-box">
            <h2 style="margin:60px 0 20px 0;color:rgb(51, 103, 209);">FAQs</h2>
            <p class="faq"><strong>How long do the day tours last?</strong><br>Between 8 to 12 hours.</p>
            <p class="faq"><strong>Are meals included?</strong><br>No, meals are not included.</p>
            <p class="faq"><strong>Do I need to buy entrance tickets separately?</strong><br>Yes, entrance tickets must be purchased separately.</p>
            <p class="faq"><strong>What about prise?</strong><br>Don't worry we charge low price always.</p>
            <p class="faq"><strong>Are the tours suitable for children?</strong><br>Yes of course.</p>
            <p class="faq"><strong>Can the tours be customized?</strong><br>Yes, we can tailor the itineraries to fit your needs.</p>
                
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