document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".table-search-input").forEach(inputField => {
        const table = inputField.closest("table");
        const tableRows = table.querySelectorAll("tbody tr");
        const allFilterCells = table.querySelectorAll("thead tr:nth-child(2) td, thead tr:nth-child(2) th");
        const headerCell = inputField.closest("td") || inputField.closest("th");
        const columnIndex = Array.from(allFilterCells).indexOf(headerCell);

        inputField.addEventListener("input", () => {
            const searchQuery = inputField.value.toLowerCase();
            tableRows.forEach(row => {
                const cells = row.querySelectorAll("td");
                const cell = cells[columnIndex];
                const value = cell?.textContent.toLowerCase().replace(",", "") ?? "";
                row.style.visibility = value.includes(searchQuery) ? "" : "collapse";
            });
        });
    });
});
