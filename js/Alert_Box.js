const dismiss = document.querySelector("#dismiss");

if (dismiss) {
    dismiss.addEventListener("click", (element) => {
        element.target.parentNode.remove();
    });
    setTimeout(() => {
        dismiss.parentNode.remove();
    }, 5000);
}