// Aside Sticky top property
let asideSection = document.getElementsByClassName("aside-section")[0];
asideSection.style.top = `${document.getElementsByTagName("header")[0].offsetHeight + 10}px`;

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

// Fetching and displaying latest news
let apiKey = "b6c492dd282d458e83fa9ece22361081";

const xhr = new XMLHttpRequest();
xhr.open("GET", `https://newsapi.org/v2/top-headlines?country=in&category=technology&apiKey=${apiKey}`, true);
xhr.onprogress = function () { }
xhr.onload = function () {
    let response = JSON.parse(this.responseText).articles;
    let html = "";

    for (let index = 0; index < response.length; index++) {
        let element = response[index];
        if (element.urlToImage == null) {
            element.urlToImage = "https://assets.thehansindia.com/h-upload/2021/07/31/1092805-tech.jpg";
        }
        if (element.description == null) {
            element.description = "";
        }
        // Getting news-portrait
        html += `<a href="${element.url}" target="_blank">
                    <div class="news news-portrait">
                        <img src="${element.urlToImage}" alt="image">
                        <div class="info">
                            <h2>${element.title}</h2>
                            <p>${element.description}</p>
                            <p class="publish">Published at: ${element.publishedAt}</p>
                        </div>
                    </div>
                </a>`;

        // Getting news-landscapes (3 in count)
        let temp = index;
        for (index = index + 1; index < response.length && index < temp + 4; index++) {
            let innerElement = response[index];
            if (innerElement.urlToImage == null) {
                innerElement.urlToImage = "https://assets.thehansindia.com/h-upload/2021/07/31/1092805-tech.jpg";
            }
            if (innerElement.description == null) {
                innerElement.description = "";
            }
            html += `<div class="news news-landscape">
                        <a href="${innerElement.url}" target="_blank"><img
                                src="${innerElement.urlToImage}" alt="image"></a>
                        <div class="info">
                            <a href="${innerElement.url}" target="_blank">
                                <h2>${innerElement.title}</h2>
                            </a>
                            <p>${innerElement.description}</p>
                            <a href="${innerElement.url}" target="_blank" class="more-btn">Know More</a>
                            <p class="publish">Published at: ${innerElement.publishedAt}</p>
                        </div>
                    </div>`;
        }
    }
    let newsArea = document.querySelector(".news-section");
    newsArea.innerHTML = html;
}
xhr.send();

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
if (loginButton) { loginButton.addEventListener("click", loginFormAppear); }

backOverlay.addEventListener("click", removeLogin);

// Profile Picture in aside section

if (asideSection.firstElementChild) {
    const fileInput = document.querySelector("#profile");
    const profilePic = document.querySelector("#profile-pic");

    fileInput.addEventListener("change", (element) => {
        const choosedFile = element.target.files[0];
        if (choosedFile) {
            const reader = new FileReader();

            reader.addEventListener("load", () => {
                profilePic.setAttribute("src", reader.result);
            });
            reader.readAsDataURL(choosedFile);
        }
    });
}