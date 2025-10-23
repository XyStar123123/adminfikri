export function initTheme(){
    const darkModeToggle = document.getElementById("darkModeToggle")
    const moonIcon = document.getElementById("moonIcon")
    const sunIcon = document.getElementById("sunIcon")
    const body = document.body

    body.classList.remove("light", "dark")

    darkModeToggle.addEventListener("click", ()=>{
        if(!body.classList.contains("dark")){
            body.classList.add("dark")
            body.classList.remove("light")
            moonIcon.style.display = "none"
            sunIcon.style.display = "inline"
        }
        else{
            body.classList.add("light")
            body.classList.remove("dark")
            moonIcon.style.display = "inline"
            sunIcon.style.display = "none"
        }
    })
}