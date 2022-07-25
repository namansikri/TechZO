<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/About_Us.css">
    <link rel="stylesheet" href="./css/Login_Form.css">
    <title>TechZO: About Us</title>
</head>

<body>
    <div class="back-overlay"></div>
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
        <div id="about">
            <h1 id="projectheading">OUR PROJECT</h1>
            <div id="info">
                <p class="project" id="para1">
                    We aimed to build a tech website for latest tech news about latest
                    gadgets, applications and updates across various platforms. Displays
                    Top technology headlines from India. We had created a home page, top
                    10 section (Where we will display top 10 current best gadgets in the
                    market), Login and Signup form (Which will give user some enhanced
                    benefits), About us section and Contact us. Additionally we had added
                    some cool animations in the Navigation bar, Top 10 gadgets, Login and
                    Signup forms. Our team created the pages of separate sections and
                    finally we merged them into the main html file (frontend only).
                </p>
                <p class="project" id="para">
                    We have used Top technology headlines from India API to fetch the latest news using JSON data.
                    By creating an XHR object we successfully fetched the JSON and parsed it using JSON.parse()
                    Then displaying the latest tech news in the Home section of our webpage in a bewitching manner.
                    Advantage of using an API is that we will get latest news each time the webpage is refreshed displaying the current status.
                    Similarly fetching Top 10.
                    <br>Aim to build a tech website capable of showing all the important things related to technology like, latest news, new launches in gadgets, contact link.
                    Our website will have a main homepage in which we will have the links to all the sections in the Navigation bar, that will redirect the user to the specific requested page.
                    We also aim to make it a single page application that do not require to reload the whole page for navigating through different sections.
                </p>
                <span class="more-btn">Read More</span>
            </div>
        </div>
        <div id="our-team">
            <h1>MEET OUR TEAM</h1>
            <div id="team-container">
                <div class="team">
                    <img src="./images/Neeraj.jpg" alt="profile pic">
                    <h3>Neeraj Kumar </h3>
                    <p>Full Stack Web Developer</p>
                </div>
                <div class="team">
                    <img src="./images/Sourav.jpg" alt="profile pic">
                    <h3>Sourav Saxena </h3>
                    <p>Backend Developer</p>
                </div>
                <div class="team">
                    <img src="./images/Naman.jpg" alt="profile pic">
                    <h3> Naman Sikri </h3>
                    <p>Core Front end developer</p>
                </div>
            </div>
        </div>
        <div id="our-advantages">
            <h1>OUR ADVANTAGES</h1>
            <div id="advantages">
                <div class="advantage">
                    <img src="./images/ideas.png" alt="ideas">
                    <h3>Ideas and Concepts</h3>
                    <p>New Technology launches everyday with new ideas and innovation. Our website contains all latest releases in technology.</p>
                </div>
                <div class="advantage">
                    <img src="./images/design and interface.png" alt="design">
                    <h3>Designs</h3>
                    <p>Designed in a way to provide the best user experience. With almost everything about technology</p>
                </div>
                <div class="advantage">
                    <img src="./images/customize.png" alt="customize">
                    <h3>Highly Customizable</h3>
                    <p>More features are on the way to be added. Stay Tuned</p>
                </div>
                <div class="advantage">
                    <img src="./images/thums up.png" alt="thumsUp">
                    <h3>Easy To Use</h3>
                    <p>Our website is easy to use and it's free with the best user experience</p>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="./js/About_Us.js"></script>
<script src="./js/Search.js"></script>

</html>