import { initDropdownTable } from "./dropdown-table.js";
import { initExportCsv } from "./export-csv.js";
import { initLucide } from "./lucide.js";
import { initTheme } from "./theme.js";

export function main(){
    initTheme()
    initLucide()
    initDropdownTable()
    initExportCsv()
}