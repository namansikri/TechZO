const searchBox = document.getElementById("search");
searchBox.addEventListener("keyup", (e) => {
    if (e.key == "Enter") {
        const searchItem = searchBox.value;
        window.open(`https://www.google.com/search?q=${searchItem}`, "_blank").focus();
    }
});