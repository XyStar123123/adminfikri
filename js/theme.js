export function initTheme(){
    const darkModeToggle = document.getElementById("darkModeToggle")
    const body = document.body

    body.classList.remove("light", "dark")

    darkModeToggle.addEventListener("click", ()=>{
        if(!body.classList.contains("dark")){
            body.classList.add("dark")
            body.classList.remove("light")
        }
        else{
            body.classList.add("light")
            body.classList.remove("dark")
        }
    })
}