export function initExportCsv(){
    const convertCsvBtn = document.getElementById("convertCsvBtn")

    convertCsvBtn.addEventListener("click", ()=>{
        window.location.href = '../actions/export_products_csv.php';
    })
}