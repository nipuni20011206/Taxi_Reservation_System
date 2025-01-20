<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/welcomepassenger.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="styleSheet" type="text/css" href="styles/template.css">
</head>

<body>
    <br><br>
    <center>
        <h1>Welcome as a passenger!</h1>
    </center><br><br>
    <div class="content">


        <div class="oneway">
            <div style="display: flex;flex-direction: row;background-color:#c6cbcf;padding: 1%;">
                <input type="radio" name="trip" style="margin-right:1%;scale: 1.2;">
                <h3>One Way</h3>
            </div>
            <!--Selections-->
            <div style="display: flex;flex-direction: row;justify-content: space-between;">
                <div style="padding: 5%;">
                    <label>Pick-Up Location</label><br>
                    <input type="text" id="inputF" placeholder="Ex: Kandy"><br><br><br><br>

                    <label>Drop Location</label><br>
                    <input type="text" id="inputF" placeholder="Ex: Peradeniya"><br><br>
                </div>
                <div style="padding: 5%;">
                    <label>Pick-Up Time</label><br>
                    <input type="time" id="inputF" placeholder="Ex: 10.30 am"><br><br><br><br>

                    <label>Number of Passengers</label><br>
                    <input type="text" id="inputF" placeholder="Ex: 9"><br><br>
                </div>
            </div>

            <!--Submit button-->
            <center><button id="onewayBtn">Submit</button></center>

            <!--On click view-->
            <form action="" method="">
            <div id="onclickView1">
                <div class="vehicles">
                    
                    <div class="v1">
                        <input type="radio" name="vehicle" style="margin-right: 2%;"><label id="pLabel"><b>Van</b><br>10 passengers
                            Rs.10000</label>
                        <img src="src/images/van.png" height="160" width="160">
                    </div>
                    <div class="v1">
                        <input type="radio" name="vehicle" style="margin-right: 2%;"><label> <b>Van</b><br>15 passengers
                            Rs.10000</label>
                        <img src="src/images/van.png" height="160" width="160">
                    </div>
                    <div class="v1">
                        <input type="radio" name="vehicle" style="margin-right: 2%;"><label><b>Van</b><br>20 passengers
                            Rs.10000</label>
                        <img src="src/images/van.png" height="160" width="160">
                    </div>
                </div><br>

                <center><button>Payment</button></center><br>
            </div></form>

        </div>
        <div class="return">
            
            <div style="display: flex;flex-direction: row;background-color:#c6cbcf;padding: 1%;" >
                <input type="radio" name="trip" style="margin-right:1%;">
                <h3>Return</h3>
            </div>
            <!--Selections-->
            <div style="display: flex;flex-direction: row;justify-content: space-between;">
                <div style="padding: 5%;">
                    <label>Pick-Up Location</label><br>
                    <input type="text" id="inputF" placeholder="Ex: Kandy"><br><br><br><br>

                    <label>Drop Location</label><br>
                    <input type="text" id="inputF" placeholder="Ex: Peradeniya"><br><br>
                </div>
                <div style="padding: 5%;">
                    <label>Pick-Up Time</label><br>
                    <input type="time" id="inputF" placeholder="Ex: 10.30 am"><br><br><br><br>

                    <label>Number of passengers</label><br>
                    <input type="text" id="inputF" placeholder="Ex: 9"><br><br>
                </div>
            </div></form>
            <center><button id="returnBtn">Submit</button></center>

            <!--On click view-->
            <div id="onclickView2">
                <div class="vehicles">
                    
                    <div class="v1">
                        <input type="radio" name="vehicle" style="margin-right: 2%;"><label id="pLabel"><b> Three Wheeler</b><br>3 passengers
                            Rs.10000</label>
                        <img src="src/images/rickshaw.png" height="160" width="160">
                    </div>
                    <div class="v1">
                        <input type="radio" name="vehicle" style="margin-right: 2%;"><label> <b>Car</b><br>3 passengers
                            Rs.10000</label>
                        <img src="src/images/car.png" height="160" width="160">
                    </div>
                    <div class="v1">
                        <input type="radio" name="vehicle" style="margin-right: 2%;"><label> <b>Car</b><br>4 passengers
                            Rs.10000</label>
                        <img src="src/images/car.png" height="160" width="160">
                    </div>
                </div><br>

                <center><button>Payment</button></center><br>
            </div>
        </div>


    </div>
    <!-- footer -->
    <footer class="footer">
        <ul class="links">
            <li class="footerItem"><a class="footerLink" href="#">T&C</a></li>
            <li class="footerItem"><a class="footerLink" href="#">Privacy&Policy</a></li>
            <li class="footerItem"><a class="footerLink" href="#">Careers</a></li>
        </ul>

        <ul class="socialMedia">
            <li class="footerItem"><a class="footerLinkSocial facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="footerItem"><a class="footerLinkSocial youtube" href="#"><i class="fab fa-youtube"></i></a></li>
            <li class="footerItem"><a class="footerLinkSocial twitter" href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="footerItem"><a class="footerLinkSocial linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
    </footer>
<!-- footer end -->

    <script src="./js/home.js"></script>
    </div>


    <script src="./js/welcome.js"></script>
</body>

</html>