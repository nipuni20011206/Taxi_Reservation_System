<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="styleSheet" type="text/css" href="styles/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body id="body1">

    <div class="login">

        <div class="content">
            <img src="./src/images/ourLogo.png" height="200" width="200">
            <h2>Login</h2>
            <div>
                <div>
                    <label id="error" style="color: red;"></label>
                </div>
                <label>Email</label><br>
                <input type="text" placeholder="example@gmail.com" required id="email" name=""><br /><br>

                <label>Password</label><br>
                <input type="password" placeholder="password" required id="password" name=""><br /><br>

                <center>
                    <input type="checkbox" id="rem" name="">
                    <label style="color: rgba(123,123,123,255);"> Remember me</label>
                    <a href="" id="fpw">Forgot password?</a><br><br><br>
                </center>

                <!--Login Button-->
                <center><button id="loginbutton" onclick="login();">Login</button></center><br><br>

                <center><label>Or sign in with</label><br><br><br>

                    <center>
                        <button style="margin-right: 5%;" id="altBtn">
                            <img src="src/images/search.png" height="15" width="15"></button>

                        <button id="altBtn"><img src="src/images/facebook.png" height="16" width="15" style="color: blue;"></button>

                        <br><br><br>
                    </center>

                    <label class="btn">Don't have an account ? <a href="aftersignup.html" id="signup">Signup</a></label>
                </center>

            </div>
        </div>

        <div class="image"></div>
    </div>

    <script src="js/login.js"></script>

</body>

</html>