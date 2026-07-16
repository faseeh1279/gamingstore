<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Admin Panel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
  
    /* Global */
    body {
        overflow-x: hidden;
        background: #f8f9fa;
    }
    /* Sidebar */

    .sidebar {
        width: 260px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        background: #212529;
        color: white;
        z-index: 1050;
        transition: all .3s ease;
        overflow-y: auto;
    }

    /* Sidebar collapsed */

    .sidebar.collapsed {
        width: 80px;
    }

    /* Sidebar Header */

    .sidebar-header {
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
        border-bottom: 1px solid rgba(255, 255, 255, .1);
    }

    .brand {
        color: white;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 22px;
        font-weight: 600;
    }

    .brand:hover {
        color: white;
    }

    .brand i {
        font-size: 28px;
    }

    /* Hide brand text when collapsed */

    .sidebar.collapsed .brand-text {
        display: none;
    }


    /* Menu */


    .sidebar-menu {
        list-style: none;
        padding: 15px 0;
        margin: 0;
    }

    .menu-item {
        width: 100%;
    }

    .menu-link {
        display: flex;
        align-items: center;
        gap: 15px;
        width: 100%;
        padding: 13px 22px;
        color: #ced4da;
        text-decoration: none;
        background: none;
        border: none;
        transition: .2s;
    }

    .menu-link:hover {
        background: #343a40;
        color: white;
    }

    .menu-link.active {
        background: #0d6efd;
        color: white;
    }

    /* Icons */

    .menu-link i {
        font-size: 21px;
        min-width: 25px;
        text-align: center;
    }

    /* Hide text on collapse */

    .sidebar.collapsed .menu-link span {
        display: none;
    }

    /* Center icons */

    .sidebar.collapsed .menu-link {
        justify-content: center;
    }


    /* Arrow */


    .arrow {
        margin-left: auto;
        transition: .3s;
    }

    .menu-link:not(.collapsed) .arrow {
        transform: rotate(180deg);
    }

    .sidebar.collapsed .arrow {
        display: none;
    }

    /* ===========================
    Sub Menu
    =========================== */

    .submenu {
        background: #1c1f22;
        list-style: none;
        padding: 5px 0;
    }

    .submenu-link {
        display: block;
        padding: 10px 55px;
        color: #adb5bd;
        text-decoration: none;
        font-size: 14px;
    }

    .submenu-link:hover {
        color: white;
        background: #343a40;
    }

    /* Main Content */
    .main {
        margin-left: 260px;
        min-height: 100vh;
        transition: .3s ease;
    }

    .main.expanded {
        margin-left: 80px;
    }

    /* Navbar */
    .navbar {
        height: 70px;
    }

    /* Overlay Mobile */
    #overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, .5);
        z-index: 1040;
    }


    /* Mobile Responsive */


    @media (max-width: 991px) {
        .sidebar {
            left: -260px;
        }

        .sidebar.mobile-open {
            left: 0;
        }

        .main {
            margin-left: 0;
        }

        .sidebar.collapsed {
            width: 260px;
        }
    }
    </style>
</head>
<body>
<div class="wrapper">
    @include('layouts.partials.sidebar')
    <div class="main" id="main">
        @include('layouts.partials.navbar')
        <div class="content p-4">
            @yield('content')
        </div>
    </div>
</div>
<div id="overlay"></div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const main = document.getElementById("main");
    const collapseBtn = document.getElementById("sidebarCollapse");
    const mobileBtn = document.getElementById("mobileSidebarToggle");
    const overlay = document.getElementById("overlay");
    // Desktop Sidebar Collapse
    if (collapseBtn) {
        collapseBtn.addEventListener("click", function () {
            sidebar.classList.toggle("collapsed");
            main.classList.toggle("expanded");

            if (sidebar.classList.contains("collapsed")) {
                localStorage.setItem("sidebar", "collapsed");
            } else {
                localStorage.setItem("sidebar", "expanded");
            }
        });
    }
    // Load Sidebar State
    const sidebarState = localStorage.getItem("sidebar");
    if (sidebarState === "collapsed") {
        sidebar.classList.add("collapsed");
        main.classList.add("expanded");
    }
    // Mobile Sidebar Open
    if (mobileBtn) {
        mobileBtn.addEventListener("click", function () {
            sidebar.classList.add("mobile-open");
            overlay.style.display = "block";
        });
    }
    // Close Sidebar On Overlay Click
    if (overlay) {
        overlay.addEventListener("click", function () {
            sidebar.classList.remove("mobile-open");
            overlay.style.display = "none";
        });
    }
    // Close Mobile Sidebar When Resize
    window.addEventListener("resize", function () {
        if (window.innerWidth > 991) {
            sidebar.classList.remove("mobile-open");
            overlay.style.display = "none";
        }
    });
    //  Close Mobile Sidebar After Clicking Menu
    const menuLinks = document.querySelectorAll(".menu-link");

    menuLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            if (window.innerWidth <= 991) {
                sidebar.classList.remove("mobile-open");
                overlay.style.display = "none";
            }
        });
    });
});
</script>