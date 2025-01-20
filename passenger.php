<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="styleSheet" type="text/css" href="styles/passenger.css">

</head>

<body>

    <div style="box-shadow: 1px 1px 1px 1px black;padding: 1%;background-color: white;">
        <center>
            <h1>Sign Up as Passenger</h1>
        </center>
        <div class="passenger">
            <div class="details">
                <div style="display: flex;flex-direction: row;">
                    <div>
                        <label>First Name</labeL><br>
                        <input type="text" id="firstname" name="" class="inf" placeholder="Input first name">
                    </div>
                    <div style="margin-left: 4%;">
                        <label>Last Name</labeL><br>
                        <input type="text" id="lastname" name="" class="inf" placeholder="Input last name"><br><br>
                    </div>
                </div>
                <label>Email</labeL>
                <input type="email" id="email" name="" class="inf2" placeholder="example:-example@gmail.com"><br>

                <label>Telephone Number</labeL>
                <input type="text" id="phone" name="" class="inf2" placeholder="+94"><br>

                <label>Password</labeL>
                <input type="password" id="password1" name="" class="inf2" placeholder="Enter at least 8+ characters"><br>

                <label>Re Enter Password</labeL>
                <input type="password" id="password2" name="" class="inf2" placeholder="Enter at least 8+ characters"><br>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <div style="display: block;background-color:#f3f4f6;width: 31.5vw;">
                    <label>Gender</label><br>
                    <input type="radio" id="gender1" value="Male" style="margin: 1%;" checked> Male<br>
                    <input type="radio" id="gender2" value="Female" style="margin: 1%;"> Female<br>
                </div><br>
                <div class="form-group">
                    <label for="district">Address</label>
                    <input type="text" id="district" name="district" required>
                </div>
            </div>
            <div class="upload">
                <label>Profile Photo(Not Mandotary)</label>
                <div class="photo">

                    <label>Drag files to upload</label><br><br>
                    <input type="file" id="licence-photo" name="licence-photo" accept="image/*" required>
                </div>
            </div>
        </div>
        <center>
            <div class="agree">
                <input type="checkbox"> By signing Up,I agree with the Terms of Use & Privacy Policy<br><br><br>
            </div>
            <div>
                <label id="error" style="color: red;"></label>
            </div>
            <button onclick="signup2();">Register</button><br><br>
        </center>
    </div>

    <script src="js/login.js"></script>

</body>

</html>