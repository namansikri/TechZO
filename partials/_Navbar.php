<header>
    <div class="header-container">
        <div class="left">
            <a href="#">
                <img src="./images/logo.png" alt="logo">
                <div class="tagline">
                    <p class="tag-ele">TechZO</p>
                    <p class="tag-ele small">Ready For The Future</p>
                </div>
            </a>
        </div>
        <nav>
            <ul>
                <li> <a href="./Home_Page.php" id="home">HOME</a> </li>
                <li> <a href="./Top_10.php" id="top10">TOP 10</a> </li>
                <li> <a href="./About_Us.php" id="aboutus">ABOUT US</a> </li>
                <li> <a href="./Home_Page.php#footer" id="contactus">CONTACT US</a> </li>
            </ul>
        </nav>
        <div class="right">
            <?php
            session_start();
            if (isset($_SESSION['loggedin']) && isset($_SESSION['email']) && $_SESSION['loggedin']) {
                echo "<a href='./partials/_Logout.php' class='enroll-btn'>Logout</a>";
            } else {
                echo '<span class="enroll-btn" id="login">Login</span>
                <a href="./Sign_Up.php" target="_blank" class="enroll-btn" id="signup">Sign Up</a>';
            }
            ?>
            <img src="https://icons-for-free.com/iconfiles/png/512/magnifying+glass+search+zoom+icon-1320196453426529585.png" alt="search" id="search-icon">
            <input type="text" name="search" id="search" placeholder="Search">
        </div>
    </div>
</header>