<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./logos/Logo maker project.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Contact</title>
</head>
<body style="background-color: #75fb87;" >
    <div>
        <section id="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.6457244522685!2d-0.7816601221922813!3d51.995110571928386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876ff8daa6dcdc9%3A0x1a93ec62c147871a!2s7%20Porthmellin%20Cl%2C%20Tattenhoe%2C%20Milton%20Keynes%20MK4%203AQ!5e0!3m2!1sen!2suk!4v1732634450112!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </section>

        <section id="contactUs">

            <div id="contactMain">
                <div id="contactLabels">
                    <div>
                        <i id="fa fa-home"></i>
                        <h5>7 Porthmellin Close</h5>
                        <p>Rosemullion Avenue, Tattenhoe</p>
                    </div>
                    <div>
                        <i id="fa fa-phone"></i>
                        <h5>+44 7311308686</h5>
                        <p>Available Monday to Sarturday, 10am to 6pm</p>
                    </div>
                    <div>
                        <i id="fa fa-envelope"></i>
                        <h5>sales@rolsatech.com</h5>
                        <p>Email us your query</p>
                    </div>
                </div>
                <div id="contactInputs">

                    <form action="form-handler.php" method="post">
                        <input type="text" name="name" placeholder="Enter your Name" required>
                        <input type="email" name="email" placeholder="Enter your Email Address" required>
                        <textarea rows="8" name="Message" placeholder="Message" required></textarea>
                        <button type="Submit" id="hero-btn red-btn" class="bg-info text-black">Send Message</button>
                    </form>

                </div>
            </div>
        </section>
    </div>

    <!-- footer section -->
    <footer style="display: flex;">
        <div class="footer_child1" style="position: relative; top: 10%; height: 100%; height: 300px; width: 400px;">
            <a href="./index.php"><img width="200px" height="150px" style="position: relative; left: 20%;" src="./logos/Logo.png" alt="logo"></a>
            <a href=""><li style="position: relative; font-size: 40px; left: 20%; top: 10%;">+447311883461</li></a>
            <a href=""><li style="position: relative; left: 20%; top: 10%; font-size: 35px;">sales@rolsatech.com</li></a>
        </div>
        <div class="footer_child2" style="position: relative; top: 42.5%; left: 10%; height: 175px;">
            <li style="font-size: 40px;">About Us</li>
            <a href="./rolsa.php"><li style="font-size: 35px; opacity: 75%;">Our Story</li></a>
            <a href="./contact.php"><li style="font-size: 35px; opacity: 75%;">Contact</li></a>
        </div>
        <div class="footer_child3" style="position: relative; top: 42.5%; left: 20%; height: 175px;">
            <li style="font-size: 40px;">Account</li>
            <a href="./login.php"><li style="font-size: 35px; opacity: 75%;">Log In</li></a>
            <a href="./registration.php"><li style="font-size: 35px; opacity: 75%;">Register</li></a>
        </div>
        <div class="footer_child4" style="position: relative; top: 42.5%; left: 30%; height: 350px;">    
            <li style="font-size: 40px;">Legal</li>
            <a href="./careers.php"><li style="font-size: 35px; opacity: 75%;">Careers</li></a>
            <a href="./privacy-policy.php"><li style="font-size: 35px; opacity: 75%;">Privacy Policy</li></a>
            <a href="./terms-condition.php"><li style="font-size: 35px; opacity: 75%;">Terms & Conditions</li></a>
            <a href="./return-policy.php"><li style="font-size: 35px; opacity: 75%;">Return Policy</li></a>
            <a href="./security-vulnerabilities.php"><li style="font-size: 35px; opacity: 75%;">Security & Vulnerabilities</li></a>
        </div>
    </footer>
</body>
</html>