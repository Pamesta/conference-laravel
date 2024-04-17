import "./bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#date", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true,
    });
});
