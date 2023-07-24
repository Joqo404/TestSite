<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
</head>
<body>
    <div class = "Main">
        <div class = "TittleImg unit-block-class" >
            <img src="image\Logo.png" id="Logo">
            <img src="image\Illustration.png" id="Illustration">
        </div>
        <div class = "Singin unit-block-class">
            <h2> Sign In </h2>
            <div> <p> Email </p> <input type="text" name="login" placeholder="input your login"> </div>
             <button id = "show-password-button" onclick="button_show_password()"><img src="image\eye-no.svg"></button>
            <div> <p> Password </p> <input type="password" name="password" placeholder="input your password" id="input-password-place"> </div>

            <div class = "forgot_password"> <a href=""> forgot password ?</a></div>
            <div > <button class = "buttonSignIn"> Sing in </button> </div>

        </div>
    </div>
    <script type="text/javascript" src="js/script.js">
    </script>
</body>
</html>
