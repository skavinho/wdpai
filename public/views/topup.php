<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Michal Pozdal">
    <link rel="stylesheet" href="/public/css/styleMain.css">
    <link rel="stylesheet" href="/public/css/styleLogin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="/public/scripts/script.js"></script>
    <script src="https://kit.fontawesome.com/5093dc09b3.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <a href="index.php"> <img src="/public/assets/logo.png" class="logo" /></a>
        <div class="bars">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div id="nav">
            <a href="home"><span class="menu">Home</span></a>
            <a href="home#products"><span class="menu">Menu</span></a>
            <a href="aboutus"><span class="menu">About us</span></a>
            <a href=""><span class="menu">Account</span></a>
            <a href="cart"><span class="menu"><i class="fa-solid fa-cart-shopping"></i></span></a>
        </div>

    </header>
    <main>
        <span class="textHeader">
            Top up
        </span>
        <form id="addMoney" method="post" action="addMoney">
            <span><i class="fa-solid fa-money-bill"></i><input type="number" id="number" name="number"
                    placeholder="10.00"></span>

        </form>
        <button type="submit" form="addMoney" value="addMoney">Top up</button>

    </main>

    <footer>
        <span id="newsletter">
            <h5>Subscribe to our newsletter!</h5>
            <span>
                <input type="text" id="email" name="email" placeholder="Email">
                <span class="btn">
                    OK
                </span>
            </span>
        </span>


        <span id="social">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
        </span>
    </footer>
</body>

</html>

<?php

?>