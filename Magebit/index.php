<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello</title>
    <link href="index.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e951d8ad09.js" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</head>
<body>
<!-- Right side image -->
<img id="summer_image" src="Images/image_summer.png" alt="Pineapple with headphones and glasses"/>
<img id="logo" src="Images/logo.png" alt="Geometric pineapple logo"/>
<img id="logo_text" src="Images/logo_text.png" alt="Text pineapple"/>

<!-- Menu -->
<span id="menu">
    <a href="#" class="pages">About</a>
    <a href="#" class="pages">How it works</a>
    <a href="#" class="pages">Contact</a>
</span>

<!-- Heading and subheading -->
<img src="Images/trophy.png" id="trophy">
<h1 id="heading_1">Subscribe to newsletter</h1>
<p id="subheading_1">Subscribe to our newsletter and get 10% discount on <br>
    pineapple glasses.
</p>

<!-- Email submission form -->
<form id="form_1" action="javascript:thankYou()" onload="required()" method="post">
    <input id="email" name="email" type="text" placeholder="Type your email address here..." maxlength="50" size="66"
           onkeydown="validation()">
    <input id="arrow" type="image"  src="Images/ic_arrow.svg" alt="Submit"/>
</form>
<span id="text"></span>
<!-- Terms of service -->
<span id="rules">
    <input id="MyCheckbox" type="checkbox" onclick="validation()" style="width:26px;height:26px" action="#">
    <label for="MyCheckbox"><img src="Images/checked.png"/></label>
    <span id="TOS">I agree to
        <a href="#" id="TermsOfService">terms of service</a>
    </span>
</span>

<!-- Socials -->
<hr id="line" name="line"/>

<div class="socials">
    <ul id="socials">
        <li><a href="#"><i id="facebook" class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i id="instagram" class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i id="twitter" class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i id="youtube" class="fab fa-youtube"></i></a></li>
    </ul>
</div>

</body>
</html>
