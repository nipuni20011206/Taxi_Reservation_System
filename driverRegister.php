<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleSheet" type="text/css" href="styles/all.min.css">
    <link rel="styleSheet" type="text/css" href="styles/driverRegister.css">
    <title>Driver Registration Page</title>
</head>

<body>
    <h1>Sign up as a Driver</h1>

    <div class="container">
        <div class="left-side">

            <div id="registration-form">

                <fieldset class="field">
                    <legend class="person">Personal Information</legend>
                </fieldset><br><br>


                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Ann" required>
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Perera" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="annperera45@gmail.com" required>
                </div>

                <div class="form-group">
                    <label for="phone">Tel No</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="07890654312">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="icon">
                        <input type="password" id="password1" name="password" placeholder="8 characters" required>
                        <i onclick="showHidePassword(1);" id="eye1" class="fas fa-eye-slash icon1"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <div class="icon">
                        <input type="password" id="password2" name="confirm-password" placeholder="8 characters" required>
                        <i onclick="showHidePassword(2);" id="eye2" class="fas fa-eye-slash icon1"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" required>
                </div>

                <div class="form-group">
                    <label for="nic">NIC No</label>
                    <input type="text" id="nic" name="nic" required>
                </div>

                <div class="form-group">
                    <label for="district">Address</label>
                    <input type="text" id="district" name="district" required>
                </div>
                <div>
                    <label id="error" style="color: red;"></label>
                </div>
                <button onclick="signup();">Register</button>
            </div>
        </div>


        <div class="right-side">

            <fieldset class="field">
                <legend class="person">Vehicle Information</legend>
            </fieldset><br><br>

            <div class="form-group">
                <label for="vmodel">Vehicle Model</label>
                <input type="text" id="vmodel" name="vmodel" required>
            </div>

            <div class="form-group">
                <label for="vno">Vehicle No</label>
                <input type="text" id="vno" name="vno" required>
            </div>

            <div class="form-group">
                <label for="chassis_no">Chassis No</label>
                <input type="text" id="chassis_no" name="chassis-no" required>
            </div>

            <div class="form-group">

                <label for="vehicle-photo">Vehicle Photo</label>
                <input type="file" id="vehicle_photo" name="vehicle-photo" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="licence_photo">Licence Photo</label>
                <input type="file" id="licence_photo" name="licence-photo" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="full_part">Full Time or Part Time?</label>
                <div class="f">
                    <input class="checK-box" type="checkbox" id="full" name="full" value="Full Time">
                    <label for="full">Full Time</label><br>
                </div>

                <div class="f">
                    <input class="checK-box" type="checkbox" id="part" name="part" value="Part Time">
                    <label for="part">Part Time</label><br>
                </div>
            </div>
        </div>
    </div>
    <script src="js/driverRegister.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/login.js"></script>
</body>

</html>