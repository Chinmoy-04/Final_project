<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="website icon" type="png"
     href="./images/wesiteIcon.jpeg">
</head>
<link href="./src/login.css" rel="stylesheet" >

<body>
    <div id="login">
        <div class="container">
            <div class="leftSidePopUp">
                <!-- <div class="whySide">
                    <h2>Why login?</h2>
                    <p> <img src="https://img6.hkrtcdn.com/react/static/media/signupFlow/white-bg-tick.svg" alt="">
                        Manage your orders</p>
                    <p><img src="https://img6.hkrtcdn.com/react/static/media/signupFlow/white-bg-tick.svg" alt="">Get
                        exclusive deals and
                        offers</p>
                    <p><img src="https://img6.hkrtcdn.com/react/static/media/signupFlow/white-bg-tick.svg"
                            alt="">Personalized
                        Recommendations</p>
                </div> -->
            </div>
            <div class="rightSidePopUp">
                <div class="loginPage">
                    <h1 id="timeBar">&times</h1>
                    <div class="userPanel">
                        <h3 id="loginH3"><a href="./login.html">Login</a></h3>
                        <h3 id="signup"><a class="singup" href="./signup.php">Signup</a></h3>
                        <div class="animation hover"></div>
                    </div>
                    <form action="login_php.php" id="loginForm" method="post">
                        <label for="mobile">Mobile Number</label>
                        <input type="text" name="mobile" id="mobileNo" placeholder="Enter Mobile Number" required>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Password">
                        <a href="#" class="passwordForget">Forget Password</a>
                        <!-- <a href="#" class="passwordForget">Login Password</a> -->
                        <input type="submit" value="Login">
                        <!-- <button id="btn"><a href="./index.html" id="home">Login</a></button> -->
                    </form>


                    <div class="lines">
                        <div class="oneline"></div>
                        <p id="or">or</p>
                        <div class="twoline"></div>
                    </div>
                    <div class="socialink">

                        <a href="https://accounts.google.com/" id="social"><img
                                src="data:image/png;base64,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" alt="">
                            Google</a>
                        <a href="https://www.facebook.com/" id="social"><img
                                src="data:image/jpeg;base64,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" alt=""> Facebook</a>
                    </div>
                    <div class="hr"></div>
                    <p id="pTaglast">By logging in you agree to our <a href="#">Terms & Conditions</a></p>

                </div>
            </div>
        </div>
    </div>
    
</body>

</html>

<script src="./script/login.js"></script>