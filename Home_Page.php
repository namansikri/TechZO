<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechZO</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/Home_Page.css">
    <link rel="stylesheet" href="./css/Login_Form.css">
    <link rel="stylesheet" href="./css/Alert_Box.css">
</head>

<body>
    <div class="back-overlay"></div>
    <div class="background-image"></div>
    <div id="form">
        <h1>Login</h1>
        <form action="./partials/_Login.php" method="post">
            <input class="login-input" type="email" name="email" placeholder="Email">
            <input class="login-input" type="password" name="password" placeholder="Password">
            <button type="submit" class="login-button">Login</button>
            <p class="message">Not registered? <a href="./Sign_Up.php" target="_blank">Create an account</a></p>
        </form>
    </div>
    <div class="main-container">
        <?php require "./partials/_Navbar.php" ?>
        <?php include "./partials/_Show_Success.php" ?>
        <?php include "./partials/_Success_Create_Alert.php" ?>

        <div class="overlay"></div>

        <section>
            <div class="news-section"></div>
            <div class="aside-section">
                <?php
                if (isset($_SESSION['loggedin']) && isset($_SESSION['email']) && $_SESSION['loggedin']) {
                    echo "
                <div class='aside-in'>
                    <div class='profile-image'>
                        <img src='https://www.pinclipart.com/picdir/big/169-1695846_jane-no-one-icon-clipart.png' alt='profile' id='profile-pic'>
                        <input type='file' name='profile' id='profile'>
                        <label for='profile'>Change Profile</label>
                    </div>
                    <div class='profile-description'>
                        <p><strong>First Name: </strong><span>" . $_SESSION['firstName'] . "</span></p>
                        <p><strong>Last Name: </strong><span>" . $_SESSION['lastName'] . "</span></p>
                        <p><strong>Email: </strong><span>" . $_SESSION['email'] . "</span></p>
                        <p><strong>Joining Date: </strong><span>" . $_SESSION['joinTime'] . "</span></p>
                    </div>
                </div>";
                }
                ?>
            </div>
        </section>
    </div>

    <section id="footer" class="white-section">
        <div class="container-fluid">
            <video autoplay muted loop id="video-bg">
                <source src="./videos/Rotating Earth.mp4" type="video/mp4">
            </video>
            <a href="https://twitter.com/naman_sikri" target="_blank"><i class="fab icon-footer fa-twitter"></i></a>
            <a href="https://www.facebook.com/nk7075034/" target="_blank"><i class="fab icon-footer fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/souravsaxena303200/" target="_blank"><i class="fab icon-footer fa-instagram"></i></a>
            <a href="mailto: nk7075034@gmail.com" target="_blank"><i class="fab fas icon-footer fa-envelope"></i></a>
            <p class="footer-p">© Copyright 2021 TechZO</p>
        </div>
    </section>
</body>

<script src="./js/Home_Page.js"></script>
<script src="https://kit.fontawesome.com/42c6808569.js" crossorigin="anonymous"></script>
<script src="./js/Alert_Box.js"></script>
<script src="./js/Search.js"></script>

</html>