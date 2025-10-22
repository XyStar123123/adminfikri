export function initDropdownTable(){
    const headerDropdownToggle = document.getElementById("headerDropdownToggle");
    const tableHeaderDropdown = document.getElementById("tableHeaderDropdown");
    const dropdownContentToggle = document.querySelectorAll(".dropdown-content-toggle");
    const tablePageDropdownContent = document.querySelectorAll(".table-page-dropdown-content")
    const tablePageHeaderTitle = document.querySelector(".table-page-header-title");
    let activeChevron = false;
    let activeChevronContent = false;

    if(!headerDropdownToggle || !tableHeaderDropdown || !dropdownContentToggle) return;

    const handleDropdownClick = ()=>{   
        console.log("Clicked")
        activeChevron = !activeChevron;

        if(activeChevron){
            headerDropdownToggle.style.transform = 'rotateZ(180deg)';
            tableHeaderDropdown.style.height = "36px";
            tableHeaderDropdown.style.opacity = "1";
            tableHeaderDropdown.style.visibility = "visible";
            tablePageHeaderTitle.style.marginBottom = '10px'
        }else{
            headerDropdownToggle.style.transform = 'rotateZ(0deg)';
            tableHeaderDropdown.style.height = "0px";
            tableHeaderDropdown.style.opacity = "0";
            tableHeaderDropdown.style.visibility = "hidden"
            tablePageHeaderTitle.style.marginBottom = '0'
        }
    };

    const handleDropdownContentToggle = (e) =>{
        const clickedDropdownPage = e.currentTarget.closest(".table-page-dropdown")
        const clickedContent = clickedDropdownPage.querySelector(".table-page-dropdown-content")
        const isActive = clickedContent.classList.contains("active")

        tablePageDropdownContent.forEach((content) =>{
            const chevron = content.parentElement.querySelector(".dropdown-content-toggle");
            content.classList.remove("active")
            content.style.height = "0px";
            content.style.opacity = "0";
            content.style.visibility = "hidden";
            chevron.style.transform = "rotateZ(0deg)";
        })

        if (isActive) return;

        clickedContent.classList.add("active")
        e.currentTarget.style.transform = 'rotateZ(180deg)';
        clickedContent.style.opacity = "1";
        clickedContent.style.height = "auto";
        const fullHeight = clickedContent.scrollHeight;
        clickedContent.style.height = "0px";
        clickedContent.style.height = fullHeight + "px";
        clickedContent.style.width = "100%"
        clickedContent.style.visibility = "visible";

        // e.currentTarget.style.transform = 'rotateZ(0deg)';
        // tablePageDropdownContent.style.height = "0px";
        // tablePageDropdownContent.style.width = '0px'
        // tablePageDropdownContent.style.opacity = "0";
        // tablePageDropdownContent.style.visibility = "hidden"
    }

    headerDropdownToggle.addEventListener("click", handleDropdownClick);
    dropdownContentToggle.forEach((toggle) => {
        toggle.addEventListener("click", handleDropdownContentToggle)
    })
}
