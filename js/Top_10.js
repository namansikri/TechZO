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

let moreBtn = document.getElementsByClassName("more");
Array.from(moreBtn).forEach((element) => {
    element.addEventListener("click", (e) => {
        let container = e.target.parentNode.parentNode;
        let itemImage = e.target.parentNode.parentNode.querySelector("div");
        let iteminfo = e.target.parentNode;
        let moreContent = e.target.parentNode.firstElementChild.querySelector("div");
        if (container.style.flexDirection != 'column') {
            container.style.flexDirection = 'column';
            element.innerHTML = "Read Less";
            itemImage.style.width = '70%';
            itemImage.style.justifyContent = 'center';
            itemImage.style.background = 'none';
            itemImage.style.marginBottom = '0';
            iteminfo.style.height = '530px';
            iteminfo.style.width = '66%';
            iteminfo.style.marginLeft = '20px';
            moreContent.style.display = 'block';
        }
        else {
            container.style.flexDirection = 'row';
            element.innerHTML = "Read More";
            itemImage.style.width = '250px';
            iteminfo.style.width = '500px';
            iteminfo.style.marginTop = '20px';
            iteminfo.style.height = '230px';
            moreContent.style.display = 'none';
        }
    });
});

let morecontent = document.getElementsByClassName("morecontent");
Array.from(morecontent).forEach((element) => {
    element.style.display = "none";
});

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