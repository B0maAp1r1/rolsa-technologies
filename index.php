<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./logos/Logo maker project.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Homepage</title>
</head>
<body style="background-color: black;">

    <!-- navbar section -->
    <div class="nav-bar" style="background-color: black; height: 75px; position: absolute; display: flex; top: 25px; border-radius: 50px; left: 25%; width: 50vw;">
        <a href="./index.php" style="position: relative; border: 1px solid #75fb87; left: 300px;"><img width="100px" height="75px" src="./logos/Logo maker project.png" alt="logo"></a>
        <nav style="display: flex; gap: 20px; position: relative; left: 27.5%; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding-top: 15px; font-size: 25px;">
            <a href="./index.php"><li>Home</li></a>
            <a href="./products.php"><li>Products & Services</li></a>
            <a href="./rolsa.php"><li>Rolsa</li></a>
            <a href="./account.php"><i class="fa-solid fa-user" style="position: relative; left: 150px;"></i></a>
            <a href="./shopping-cart.php"><i class="fa-solid fa-cart-shopping" style="position: relative; left: 150px; top: 1%;"></i></a>
        </nav>
    </div>

    <!-- 1st section -->
    <div id="sect1">
        <div class="sect1_child1">
            <div style="width: 40vh; justify-self: center; position: relative; top: 15vh;">
                <h1 style="font-size: 50px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    The fully integrated energy ecosystem for your home
                </h1>
                <br><br>
                <p style="font-size: 20.5px; font-family: georgia;">
                From solar panels and EV chargers to energy storage, our solutions work seamlessly together to optimise energy use, reduce costs, and increase efficiency. With myenergi, you can power your home sustainably and take full control of your energy consumption.
                </p>
                <br><br>
                <div style="display: flex; gap: 10px;">
                    <a href="./rolsa.php"><button style="background-color: black; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; height: 45px; width: 150px; border-radius: 50px; color: #75fb87;">Find Out More</button></a>
                    <a href="./services.php"><button style="background-color: white; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; height: 45px; width: 175px; border-radius: 50px; color: black;">Book a Consultation</button></a>
                </div>
            </div>
        </div>
        <div class="sect1_child2">
            <div>
                <img width="100%" src="./pramod-tiwari-qRVxxA9gC4w-unsplash.jpg" alt="">
            </div>
            <div style="display: flex;">
                <img width="60%" src="./Images/daniele-la-rosa-messina-tt8HJ8tx8Mo-unsplash.jpg" alt="">
                <img width="40%" src="./Images/Screenshot 2025-03-11 151021.png" alt="">
            </div>
        </div>
    </div>

    <!-- 2nd section -->
    <div id="sect2">
        <div class="sect2_child1" style="position: relative; top: 10%;">
            <h1 style="position: relative; padding-top: 10px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; left: 5%;">EV <br> CHARGERS</h1>
            <br>
            <img width="425px" height="400px" style="position: relative; left: 7.5%; border: 2px solid #75fb87; border-radius: 15px;" src="./Images/jamie-antoine-tZ6FRpxgKaA-unsplash.jpg" alt="">
            <br><br>
            <p style="justify-self: start; position: relative; padding-top: 10px; font-size: 20px; left: 25px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;">Make use of our EV <br> charging stations</p>
            <br>
            <a href="./products.php"><button style="background-color: #75fb87; position: relative; left: 5%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; height: 45px; width: 150px; border-radius: 50px; color: black;">Learn more</button></a>
        </div>
        <div class="sect2_child2" style="position: relative; top: 10%;">
            <br>
            <h1 style="position: relative; padding-top: 10px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; left: 5%;">SOLAR PANELS</h1>
            <br><br>
            <img width="425px" height="400px" style="position: relative; left: 7.5%; border: 2px solid black; border-radius: 15px;" src="./Images/jonathan-mai-gticrpTJtt0-unsplash.jpg" alt="">
            <br><br>
            <p style="justify-self: start; position: relative; padding-top: 3px; font-size: 20px; left: 25px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;">Get your home and <br> business green with <br> our solar panels</p>
            <br>
            <a href="./products.php"><button style="background-color: black; position: relative; left: 5%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; height: 45px; width: 150px; border-radius: 50px; color: #75fb87; bottom: 15px;">Learn more</button></a>
        </div>
        <div class="sect2_child3" style="position: relative; top: 10%;">
            <h1 style="position: relative; padding-top: 10px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; left: 5%;">BATTERY STORAGE SYSTEM</h1>
            <br>
            <img width="425px" height="400px" style="position: relative; left: 7.5%; border: 2px solid white; border-radius: 15px;" src="./Images/zendure-power-station-DjknAhHi0OY-unsplash.jpg" alt="">
            <br><br>
            <p style="justify-self: start; position: relative; padding-top: 3px; font-size: 20px; left: 25px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;">Save all that surplus <br> solar energy with our <br> battery storage system</p>
            <br>
            <a href="./products.php"><button style="background-color: black; position: relative; left: 5%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; height: 45px; width: 150px; border-radius: 50px; color: #d9d9d9; bottom: 15px;">Learn more</button></a>
        </div>
    </div>

    <!-- 3rd section -->
    <div id="sect3">
        <div class="sect3_child1">
            <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 60px;">Installation made <br> easy.</h1>
            <br><br>
            <p style="font-size: 20px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; word-spacing: 5px;">Book our home EV charger <br> installation in a few simple steps! <br> Explore our full range of eco-smart <br> battery storage and solar solutions <br> designed to help you achieve energy <br> independence.</p>
        </div>
        <div class="sect3_child2">
            <img width="100%" height="100%" style="border-radius: 15px;" src="./Images/haberdoedas-8zoZNyJM7uY-unsplash.jpg" alt="">
        </div>
    </div>

    <!-- 4th section -->
    <div id="sect4">
        <h1 style="position: relative; left: 10%; top: 20%;">Made for home and business</h1>
        <br><br>
        <h1 style="width: 30vw; font-size: 60px; position: relative; left: 10%; top: 20%;">Maximise Your Surplus Self-Generated Energy
        </h1>
        <br>
        <p style="width:20vw; font-size: 25px; position: relative; left: 10%; top: 20%;">Our patented technology monitors your energy generation and usage, working to maximize the use of self-generated energy and minimise your grid consumption.</p>
        <br><br>
        <a href=""><button style="background-color: #75fb87; position: relative; top: 20%; left: 10%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; height: 45px; width: 200px; border-radius: 50px; color: black; bottom: 15px;">Maximise your energy</button></a>
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