<!doctype html>
<html>
    <head>
        <link href="./styles/style.css" rel="stylesheet" type="text/css" />
        <meta charset="utf-8" />
        <title>test page</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="images" class="main">
                <img src="images/logo.svg" id="logo">
                <img src="images/illustration.svg" id="illustration">
            </div>
            <div id="sign-in" class="main">
                <div id="sign-in-block">
                    <h4>Sign in</h4>
                    <p>Email</p>
                    <input type="email" name="email-input" placeholder="input your email in here">
                    <p>Password</p>
                    <input type="password" name="password" id="password-input" placeholder="input your password in here">
                    <button id="show-password-button" onclick="return show_hide_password(this);"><img src="images/eye-no.svg"></button>
                    <a id="forgot-password-text" href="https://www.google.com/">Forgot password?</a>
                    <button id="sign-in-button">Sign in</button>
                    <script src="scripts/main.js"></script> 
                </div>
            </div>
        </div>
    </body>
</html>
