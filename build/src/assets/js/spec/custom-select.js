import customSelect from 'custom-select';
import SimpleBar from "simplebar";

window.addEventListener("DOMContentLoaded", () => {
    const selects = document.querySelectorAll('.select')

    customSelect(selects);

    document.querySelectorAll('.custom-select-panel').forEach(select => {
        new SimpleBar(select);
    })
})