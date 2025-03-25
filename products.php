<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body style="background: #d9d9d9;">
    <div style="height: 30vh; width: 80vw; background-color: black; justify-self: center;">
        <!-- navbar section -->
        <div class="nav-bar" style="background-color: black; border: 2px solid white; height: 75px; position: absolute; display: flex; top: 25px; border-radius: 50px; left: 12.5%; width: 75vw;">
            <a href="./index.php"><img width="100px" height="70px" style="position: relative; left: 100px; top: 2px;" src="./logos/Logo.png" alt="logo"></a>
            <nav style="display: flex; gap: 20px; position: relative; left: 35%; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding-top: 15px; font-size: 25px;">
                <a href="./index.php"><li>Home</li></a>
                <a href="./products.php"><li>Products</li></a>
                <a href="./services.php"><li>Services</li></a>
                <a href="./rolsa.php"><li>Rolsa</li></a>
                <a href="./account.php"><i class="fa-solid fa-user" style="position: relative; left: 250px;"></i></a>
                <a href="./shopping-cart.php"><i class="fa-solid fa-cart-shopping" style="position: relative; left: 250px; top: 1%;"></i></a>
            </nav>
        </div>
        <div style="width: 15vw; position: relative; left: 5%; top: 250px;">
            <h1 style=" color: white; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Products</h1>
            <hr style="border: 2px solid white; opacity: 100%; width: 15vw;">
        </div>
    </div>

    <!-- 1st section -->
    <div id="prodSect1">
        <div class="prodSect1_child1">
            <div style="display: flex;">
                <img width="50%"  height="350px" src="./Images/zendure-power-station-DjknAhHi0OY-unsplash.jpg" alt="">
                <img width="50%"  height="350px" src="./Images/green-energy-monitor.jpg" alt="">
            </div>
            <div>
                <img width="100%" height="439px" src="./Images/michael-fortsch-bIm9salXn-g-unsplash.jpg" alt="">
            </div>
        </div>
        <div class="prodSect1_child2">
            <div style="width: 40vh; justify-self: center; position: relative; top: 15vh;">
                <h1 style="font-size: 50px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    The fully integrated energy ecosystem for your home
                </h1>
                <br><br>
                <p style="font-size: 20.5px; font-family: georgia;">
                From solar panels and EV chargers to energy storage, our solutions work seamlessly together to optimise energy use, reduce costs, and increase efficiency. With myenergi, you can power your home sustainably and take full control of your energy consumption.
                </p>
                <br>
                <br>
                <div style="display: flex; gap: 10px;">
                    <a href="./rolsa.php"><button style="background-color: black; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; height: 45px; width: 150px; border-radius: 50px; color: #75fb87;">Find Out More</button></a>
                    <a href="./services.php"><button style="background-color: white; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; height: 45px; width: 175px; border-radius: 50px; color: black;">Book a Consultation</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2nd section -->
    <div id="prodSect2">
        <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; position: relative; left: 10%;">EV CHARGERS</h1>
        <hr style="border: 2px solid black; opacity: 100%; width: 15vw; position: relative; left: 10%;">
        <div style="width: 80vw; justify-self: center; display: flex; background-color: white; justify-content: center;">
            <div class="prodSect2_child1">
                <img style="width: 75%; height: 550px; box-shadow: rgba(100, 100, 111, 0.5) 0px 7px 29px 0px; position: relative; left: 12.5%; top: 10%; justify-self: center;" src="./Images/eldo-rafael-iLrMw5v4afE-unsplash.jpg" alt="ev-charger">
            </div>
            <div class="prodSect2_child2">
                <div style="background-color: #75fb87; width: 75%; border-radius: 30px; height: 300px; position: relative; top: 5%; justify-self: center;">
                    <p style="width: 85%; position: relative; top: 10%; justify-self: center; font-size: 25px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                        Our latest innovation, the zappi multiphase, brings flexible charging options to suit diverse needs. With selectable power settings of 7kW and 22kW, this charger adapts seamlessly to single or three-phase electrical setups, delivering efficient, high-speed charging tailored to every user’s setup.
                    </p>
                </div>
                <br><br><br>
                <div style="background-color: black; border-radius: 30px; color: white; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; opacity: 100%; height: 250px; width: 500px; justify-content: center; justify-self: center;">
                    <p style="position: relative; top: 10%; left: 10%;">Connection Type</p>
                    <button style="width: 150px; position: relative; border-radius: 10px; top: 10%; left: 15%;">Type 2 Tethered</button>
                    <button style="width: 150px; position: relative; border-radius: 10px; top: 10%; left: 20%;">Untethered</button>
                    <hr style="position: relative; width: 75%;  top: 10%; opacity: 100%; top: 10%; justify-self: center;" color="white">
                    <p style="position: relative; top: 10%; left: 10%;">Colour</p>
                    <button style="width: 100px; position: relative; border-radius: 10px; top: 10%; left: 15%;">Black</button>
                    <button style="width: 100px; position: relative; border-radius: 10px; top: 10%; left: 20%;">White</button>
                    <hr style="position: relative; width: 75%; top: 10%; opacity: 100%; justify-self: center;" color="white">
                </div>
            </div>
        </div>
        <br><br>
        <div class="prodSect2_child3">

        </div>
    </div>

    <!-- 3rd section -->
    <div id="prodSect3">
        <div style="width: 80vw; justify-self: center; display: flex; background-color: white; justify-content: center;">
            <div class="prodSect3_child1">
                <img style="width: 75%; height: 550px; box-shadow: rgba(100, 100, 111, 0.5) 0px 7px 29px 0px; position: relative; left: 12.5%; top: 10%; justify-self: center;" src="./Images/eldo-rafael-iLrMw5v4afE-unsplash.jpg" alt="ev-charger">
            </div>
            <div class="prodSect3_child2">
                <div style="background-color: #75fb87; width: 75%; border-radius: 30px; height: 300px; position: relative; top: 5%; justify-self: center;">
                    <p style="width: 85%; position: relative; top: 10%; justify-self: center; font-size: 25px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                        Our latest innovation, the zappi multiphase, brings flexible charging options to suit diverse needs. With selectable power settings of 7kW and 22kW, this charger adapts seamlessly to single or three-phase electrical setups, delivering efficient, high-speed charging tailored to every user’s setup.
                    </p>
                </div>
                <br><br><br>
                <div style="background-color: black; border-radius: 30px; color: white; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; opacity: 100%; height: 250px; width: 500px; justify-content: center; justify-self: center;">
                    <p style="position: relative; top: 10%; left: 10%;">Connection Type</p>
                    <button style="width: 150px; position: relative; border-radius: 10px; top: 10%; left: 15%;">Type 2 Tethered</button>
                    <button style="width: 150px; position: relative; border-radius: 10px; top: 10%; left: 20%;">Untethered</button>
                    <hr style="position: relative; width: 75%;  top: 10%; opacity: 100%; top: 10%; justify-self: center;" color="white">
                    <p style="position: relative; top: 10%; left: 10%;">Colour</p>
                    <button style="width: 100px; position: relative; border-radius: 10px; top: 10%; left: 15%;">Black</button>
                    <button style="width: 100px; position: relative; border-radius: 10px; top: 10%; left: 20%;">White</button>
                    <hr style="position: relative; width: 75%; top: 10%; opacity: 100%; justify-self: center;" color="white">
                </div>
            </div>
        </div>
        <br><br>
        <div class="prodSect3_child3">

        </div>
    </div>

    <!-- 4th section -->
    <div id="prodSect4">
        <div style="width: 80vw; justify-self: center; display: flex; background-color: white; justify-content: center;">
            <div class="prodSect4_child1">
                <img style="width: 75%; height: 550px; box-shadow: rgba(100, 100, 111, 0.5) 0px 7px 29px 0px; position: relative; left: 12.5%; top: 10%; justify-self: center;" src="./Images/eldo-rafael-iLrMw5v4afE-unsplash.jpg" alt="ev-charger">
            </div>
            <div class="prodSect4_child2">
                <div style="background-color: #75fb87; width: 75%; border-radius: 30px; height: 300px; position: relative; top: 5%; justify-self: center;">
                    <p style="width: 85%; position: relative; top: 10%; justify-self: center; font-size: 25px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                        Our latest innovation, the zappi multiphase, brings flexible charging options to suit diverse needs. With selectable power settings of 7kW and 22kW, this charger adapts seamlessly to single or three-phase electrical setups, delivering efficient, high-speed charging tailored to every user’s setup.
                    </p>
                </div>
                <br><br><br>
                <div style="background-color: black; border-radius: 30px; color: white; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; opacity: 100%; height: 250px; width: 500px; justify-content: center; justify-self: center;">
                    <p style="position: relative; top: 10%; left: 10%;">Connection Type</p>
                    <button style="width: 150px; position: relative; border-radius: 10px; top: 10%; left: 15%;">Type 2 Tethered</button>
                    <button style="width: 150px; position: relative; border-radius: 10px; top: 10%; left: 20%;">Untethered</button>
                    <hr style="position: relative; width: 75%;  top: 10%; opacity: 100%; top: 10%; justify-self: center;" color="white">
                    <p style="position: relative; top: 10%; left: 10%;">Colour</p>
                    <button style="width: 100px; position: relative; border-radius: 10px; top: 10%; left: 15%;">Black</button>
                    <button style="width: 100px; position: relative; border-radius: 10px; top: 10%; left: 20%;">White</button>
                    <hr style="position: relative; width: 75%; top: 10%; opacity: 100%; justify-self: center;" color="white">
                </div>
            </div>
        </div>
        <br><br>
        <div class="prodSect4_child3">

        </div>
    </div>

    <!-- 5th section -->
    <div id="prodSect5">
        <div style="width: 80vw; justify-self: center; display: flex; background-color: white; justify-content: center;">
            <div class="prodSect5_child1">
                <img style="width: 75%; height: 550px; box-shadow: rgba(100, 100, 111, 0.5) 0px 7px 29px 0px; position: relative; left: 12.5%; top: 10%; justify-self: center;" src="./Images/eldo-rafael-iLrMw5v4afE-unsplash.jpg" alt="ev-charger">
            </div>
            <div class="prodSect5_child2">
                <div style="background-color: #75fb87; width: 75%; border-radius: 30px; height: 300px; position: relative; top: 5%; justify-self: center;">
                    <p style="width: 85%; position: relative; top: 10%; justify-self: center; font-size: 25px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                        Our latest innovation, the zappi multiphase, brings flexible charging options to suit diverse needs. With selectable power settings of 7kW and 22kW, this charger adapts seamlessly to single or three-phase electrical setups, delivering efficient, high-speed charging tailored to every user’s setup.
                    </p>
                </div>
                <br><br><br>
                <div style="background-color: black; border-radius: 30px; color: white; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; opacity: 100%; height: 250px; width: 500px; justify-content: center; justify-self: center;">
                    <p style="position: relative; top: 10%; left: 10%;">Connection Type</p>
                    <button style="width: 150px; position: relative; border-radius: 10px; top: 10%; left: 15%;">Type 2 Tethered</button>
                    <button style="width: 150px; position: relative; border-radius: 10px; top: 10%; left: 20%;">Untethered</button>
                    <hr style="position: relative; width: 75%;  top: 10%; opacity: 100%; top: 10%; justify-self: center;" color="white">
                    <p style="position: relative; top: 10%; left: 10%;">Colour</p>
                    <button style="width: 100px; position: relative; border-radius: 10px; top: 10%; left: 15%;">Black</button>
                    <button style="width: 100px; position: relative; border-radius: 10px; top: 10%; left: 20%;">White</button>
                    <hr style="position: relative; width: 75%; top: 10%; opacity: 100%; justify-self: center;" color="white">
                </div>
            </div>
        </div>
        <br><br>
        <div class="prodSect5_child3">

        </div>
    </div>
    <!-- 6th section -->
    <div id="prodSect6">
        <div style="width: 80vw; justify-self: center; display: flex; background-color: white; justify-content: center;">
            <div class="prodSect6_child1">
                <img style="width: 75%; height: 550px; box-shadow: rgba(100, 100, 111, 0.5) 0px 7px 29px 0px; position: relative; left: 12.5%; top: 10%; justify-self: center;" src="./Images/eldo-rafael-iLrMw5v4afE-unsplash.jpg" alt="ev-charger">
            </div>
            <div class="prodSect6_child2">
                <div style="background-color: #75fb87; width: 75%; border-radius: 30px; height: 300px; position: relative; top: 5%; justify-self: center;">
                    <p style="width: 85%; position: relative; top: 10%; justify-self: center; font-size: 25px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                        Our latest innovation, the zappi multiphase, brings flexible charging options to suit diverse needs. With selectable power settings of 7kW and 22kW, this charger adapts seamlessly to single or three-phase electrical setups, delivering efficient, high-speed charging tailored to every user’s setup.
                    </p>
                </div>
                <br><br><br>
                <div style="background-color: black; border-radius: 30px; color: white; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; opacity: 100%; height: 250px; width: 500px; justify-content: center; justify-self: center;">
                    <p style="position: relative; top: 10%; left: 10%;">Connection Type</p>
                    <button style="width: 150px; position: relative; border-radius: 10px; top: 10%; left: 15%;">Type 2 Tethered</button>
                    <button style="width: 150px; position: relative; border-radius: 10px; top: 10%; left: 20%;">Untethered</button>
                    <hr style="position: relative; width: 75%;  top: 10%; opacity: 100%; top: 10%; justify-self: center;" color="white">
                    <p style="position: relative; top: 10%; left: 10%;">Colour</p>
                    <button style="width: 100px; position: relative; border-radius: 10px; top: 10%; left: 15%;">Black</button>
                    <button style="width: 100px; position: relative; border-radius: 10px; top: 10%; left: 20%;">White</button>
                    <hr style="position: relative; width: 75%; top: 10%; opacity: 100%; justify-self: center;" color="white">
                </div>
            </div>
        </div>
        <br><br>
        <div class="prodSect6_child3">

        </div>
    </div>
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