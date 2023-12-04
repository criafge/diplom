import './bootstrap';
function hoverBorder(){
    let button = document.getElementById('login-btn')
    button.addEventListener("mouseover", function(){
        button.classList.remove("gradient")
        button.classList.add("gradient-border")
    })
    button.addEventListener("mouseout", function(){
        button.classList.remove("gradient-border")
        button.classList.add("gradient")
    })
}
