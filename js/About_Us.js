// Scroll Indicator animation

function updateProgress() {
    document.querySelector(":root").style.setProperty("--progress-width", `${getScrollPercentage()}%`);
    window.requestAnimationFrame(updateProgress);
}

function getScrollPercentage() {
    return ((window.scrollY) / (document.body.scrollHeight - window.innerHeight) * 100);
}

updateProgress(); // Calling to update the progress bar's width

// Search bar animation
let searchIcon = document.getElementById("search-icon");
let searchArea = document.getElementById("search");
let hasClassAnimate = true;

function clickHandler() {
    searchArea.classList.toggle("animate");
    if (hasClassAnimate) {
        searchArea.focus();
        searchArea.select();
        hasClassAnimate = false;
    }
    else {
        searchArea.blur();
        hasClassAnimate = true;
    }
}

function blurHandler() {
    searchArea.classList.toggle("animate");
    searchArea.blur();
    hasClassAnimate = true;
}

searchIcon.addEventListener("click", clickHandler);
searchArea.addEventListener("blur", blurHandler);

let para = document.getElementById('para');
let para1 = document.getElementById('para1');
let btn = document.getElementById('btn');
let projectheading = document.getElementById('projectheading');
let more = document.getElementsByClassName('more-btn')[0];

para.style.display = 'none';
let info = document.getElementById('about');
more.addEventListener('click', function readSize() {
    if (para.style.display != 'block') {
        more.innerHTML = "Read Less";
        para.style.display = 'block';
        para1.style.fontSize = '1rem';
        para.style.fontSize = '1rem';
        info.style.height = '700px';
    }
    else {
        more.innerHTML = "Read More";
        para.style.display = 'none';
        // para.style.width = '40%';
        // para1.style.width = '40%';
        para1.style.fontSize = '1.2rem';
        // para.style.fontSize = '1.2rem';
        info.style.height = 'auto';
    }
})

// Login Form
let backOverlay = document.querySelector(".back-overlay");

function loginFormAppear() {
    backOverlay.style.display = "block";
    let loginForm = document.getElementById("form");
    loginForm.style.display = "block";
    // To blur the background
    document.querySelector(":root").style.setProperty("--background-blur", "7px");
}

function removeLogin() {
    backOverlay.style.display = "none";
    let loginForm = document.getElementById("form");
    loginForm.style.display = "none";
    // To blur the background
    document.querySelector(":root").style.setProperty("--background-blur", "0px");
}

let loginButton = document.getElementById("login");
loginButton.addEventListener("click", loginFormAppear);

backOverlay.addEventListener("click", removeLogin);