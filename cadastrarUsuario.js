let isVisible1 = false;
let iconVisible1 = document.getElementById("visible-icon-1");
let passwordInput1 = document.getElementById("password-input-1");

let isVisible2 = false;
let iconVisible2 = document.getElementById("visible-icon-2");
let passwordInput2 = document.getElementById("password-input-2");

iconVisible1.addEventListener('click', () => {
    if(!isVisible1) {
        passwordInput1.setAttribute("type", "text");
        iconVisible1.setAttribute("src", "./assets/visibilityoff.svg")
        isVisible1 = !isVisible1
    } else {
        passwordInput1.setAttribute("type", "password");
        iconVisible1.setAttribute("src", "./assets/visibility.svg")
        isVisible1 = !isVisible1
    }
})

iconVisible2.addEventListener('click', () => {
    if(!isVisible2) {
        passwordInput2.setAttribute("type", "text");
        iconVisible2.setAttribute("src", "./assets/visibilityoff.svg")
        isVisible2 = !isVisible2
    } else {
        passwordInput2.setAttribute("type", "password");
        iconVisible2.setAttribute("src", "./assets/visibility.svg")
        isVisible2 = !isVisible2
    }
})