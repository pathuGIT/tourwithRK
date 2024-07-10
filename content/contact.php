
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tour With RK| Contact</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="..//css/index.css">
        <link rel="stylesheet" type="text/css" href="..//css/servise.css">
        <link rel="stylesheet" type="text/css" href="..//css/in-responsive.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&display=swap" rel="stylesheet">
        <style>
        .contact-info {
    background-color: #f2f2f2;
    padding: 20px;
    margin: 20px 0;
    border-radius: 8px;
}

.contact-info h2 {
    color: #333;
}

.contact-info p {
    color: #666;
}

.contact-info ul {
    list-style: none;
    padding: 0;
}

.contact-info ul li {
    margin-bottom: 10px;
}

.contact-info ul li a {
    color: #007bff;
    text-decoration: none;
}

.contact-info ul li a:hover {
    text-decoration: underline;
}

.whatsapp-link {
    color: #25D366;
}
        </style>
    </head>
    
    <body>
        <?php require_once "header2.php"; ?>

        <section class="contact-info">
            <h2>Contact Us</h2>
            <p>Feel free to reach out to us through any of the following methods:</p>

            <ul><li><a href="https://wa.me/+94765690030" target="_blank" class="whatsapp-link">Connect with us on WhatsApp</a></li>
                <li>Email: <a href="mailto:Keerthilakshan55@gmail.com">Keerthilakshan55@gmail.com</a></li>
                <li>Phone: <a href="tel:+94765690030">+94765690030</a></li>
                <li>Facebook: <a href="https://www.facebook.com/keerthi.lakshan.54?mibextid=ZbWKwL" target="_blank">Our Facebook Page</a></li>
            </ul>
        </section>
       
        <?php require_once "footer.php"; ?>

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