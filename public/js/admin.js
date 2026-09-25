// Mobile sidebar toggle
document.addEventListener("DOMContentLoaded", function () {

    const sidebarToggle = document.getElementById("sidebarToggle");
    const sidebar = document.querySelector(".admin-sidebar");

    sidebarToggle.addEventListener("click", function () {

        sidebar.classList.toggle("hide");

    });

});