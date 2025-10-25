export function initExportCsv(){
    const convertCsvBtn = document.getElementById("convertCsvBtn")

    if(!convertCsvBtn) return

    convertCsvBtn.addEventListener("click", ()=>{
        window.location.href = '../actions/products/export_products_csv.php';
    })
}