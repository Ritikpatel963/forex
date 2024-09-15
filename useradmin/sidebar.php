<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VTFX Client Portal</title>
    <link rel="icon" type="#" sizes="16x16" href="#">
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <div class="navbar-brand">
                        <a href="#">
                            <b class="logo-icon">
                                </b>
                                <img src="assets/images/logo.png" alt="homepage" class="dark-logo" />
                                <img src="assets/images/logo.png" alt="homepage" class="light-logo" />
                            <span class="logo-text">
                                <img src="assets/images/logo.png" alt="homepage" class="dark-logo" />
                                <img src="assets/images/logo.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1"></ul>
                </div>
            </nav>
        </header>
        
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="index.php" aria-expanded="false">
                                <i data-feather="home" class="feather-icon"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="sidebar-item">
                            <a href="tradehistory.php" class="sidebar-link">
                                <i data-feather="file-text" class="feather-icon"></i>
                                <span class="hide-menu">Report</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="Chart.php" aria-expanded="false">
                                <i data-feather="bar-chart" class="feather-icon"></i>
                                <span class="hide-menu">Chart</span>
                            </a>
                        </li> -->
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="Fund.php" aria-expanded="false">
                                <i data-feather="dollar-sign" class="feather-icon"></i>
                                <span class="hide-menu">Wallet</span>
                            </a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap">
                            <span class="hide-menu">Extra</span>
                        </li>
                        <li class="sidebar-item">
                            <a href="profile.php" class="sidebar-link">
                                <i data-feather="user" class="feather-icon"></i>
                                <span class="hide-menu">My Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="authentication-login1.html" aria-expanded="false">
                                <i data-feather="log-out" class="feather-icon"></i>
                                <span class="hide-menu">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Page content goes here -->
            