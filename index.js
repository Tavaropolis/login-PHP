let isVisible = false;
let iconVisible = document.getElementById("visible-icon");
let passwordInput = document.getElementById("password-input")

iconVisible.addEventListener('click', () => {
    if(!isVisible) {
        passwordInput.setAttribute("type", "text");
        iconVisible.setAttribute("src", "./assets/visibilityoff.svg")
        isVisible = !isVisible
    } else {
        passwordInput.setAttribute("type", "password");
        iconVisible.setAttribute("src", "./assets/visibility.svg")
        isVisible = !isVisible
    }
})