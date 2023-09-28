(function () {
  "use strict";

  // Menambahkan status aktif ke tautan navigasi sidebar
  var path = window.location.href;
  var navLinks = document.querySelectorAll("#layoutSidenav_nav .sb-sidenav a.nav-link");

  navLinks.forEach(function (navLink) {
    if (navLink.href === path) {
      navLink.classList.add("active");
    }
  });

  // Mengganti tampilan navigasi samping
  var sidebarToggle = document.getElementById("sidebarToggle");

  sidebarToggle.addEventListener("click", function (e) {
    e.preventDefault();
    document.body.classList.toggle("sb-sidenav-toggled");
  });
})();
