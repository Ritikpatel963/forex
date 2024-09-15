<?php
include 'sidebar.php';
?>
<!-- Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<style>
    a{
        text-decoration: none;
        color: #7c8798;
    }
    a:hover{
        color: #7c8798;
    }
    .icon-column {
        border-right: 1px solid #ddd;
        padding: 15px 0;
    }

    /* Remove the right-side border for the last column */
    .icon-column:last-child {
        border-right: none;
    }

    /* Adjust padding for the icons */
    .icon-column i {
        margin-bottom: 10px;
    }

    /* For small screens: Stack icons vertically, remove border */
    @media (max-width: 576px) {
        .icon-column {
            border-right: none;
            padding: 10px 0;
        }

        /* Remove bottom border for last row items on mobile */
        .icon-column:nth-last-child(2),
        .icon-column:nth-last-child(1) {
            border-bottom: none;
        }

        /* Smaller icons and text for mobile */
        .icon-column i {
            font-size: 1.5rem;
        }

        .icon-column p {
            font-size: 0.9rem;
        }
    }

    .deposit-btn {
        background: linear-gradient(85deg, rgba(111, 174, 214, 1) 8%, rgba(36, 167, 249, 1) 100%);
        border-radius: 27.5px;
        color: white;
        padding: 15px;
        gap: 10px;
    }

    .deposit-btn:hover {
        color: white;
    }

    .deposit {
        margin-top: 30px;
        padding-left: 40px;
        padding-right: 30px;
    }

    .funds-icon span {
        font-weight: 700;
        font-size: 1.3rem;
    }

    .fundsicon {
        gap: 7px;
    }

    .quickentry {
        gap: 10px;
        padding-top: 20px;
        padding-left: 35px !important;
    }

    .quickentry h3 {
        font-weight: 600;
    }

    .tradingview-widget-container {
        height: 500px !important;
    }

    .depositsection {
        padding: 50px;
    }

    .depositheading {
        margin-top: 20px;
    }

    @media (max-width: 576px) {
        .deposit {
            margin-right: 0;
            padding-left: 0;
            padding-right: 0;
        }

        .tradingview-widget-container {
            height: 380px !important;
        }
    }
</style>
<div class="container">
    <div class="card shadow-sm p-3 mb-4" style="border-radius: 10px;">
        <div class="funds-card p-3">
            <!-- First Row: My Funds Title -->
            <div class="row">
                <div class="col-12 d-flex fundsicon">
                    <div class="funds-icon">
                        <i data-feather="dollar-sign" class="feather-icon"></i>
                    </div>
                    <div class="funds-icon">
                        <span>My Funds</span>
                    </div>
                </div>
            </div>
            <!-- Second Row: USD Icon, Amount 0, and Deposit Button -->
            <div class="row align-items-center deposit">
                <div class="col-md-9 col-6">
                    <div class="currency-section">
                        <span>USD</span>
                        <span style="margin-left: 15px;">0</span>
                    </div>
                </div>
                <div class="col-md-3 col-4 text-end">
                    <button class="btn deposit-btn d-flex">
                        <i data-feather="credit-card" class="feather-icon"></i>
                        Deposit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<div class="container mt-4">
    <!-- Bootstrap Card -->
    <div class="card p-3 shadow-sm" style="border-radius: 10px;">
        <!-- First Section: Icon and Heading -->
        <div class="row mb-4">
            <div class="col-12 d-flex align-items-center quickentry">
                <i class="fas fa-door-open"></i> <!-- Bootstrap Icon for the main section -->
                <h3 class="mb-0">Quick Entry</h3>
            </div>
        </div>

        <!-- Second Section: 6 Columns with Icon and Heading -->
        <div class="row text-center depositsection">
            <div class="col-12 col-md-4 col-lg-2 icon-column">
            <a href="">   
                <img src="assets/images/wallet-outline-in-a-circle.png" alt="" width="30%">
                <div class="depositheading">
                    <p>Deposit History</p>
                </div>
            </a>
            </div>
            <div class="col-12 col-md-4 col-lg-2 icon-column">
                <a href="">
                    <img src="assets/images/wallet-outline-in-a-circle.png" alt="" width="30%">
                    <p class="depositheading">Withdrawal History</p>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-2 icon-column">
                <a href="">
                    <img src="assets/images/arrows.png" alt="" width="30%">
                    <p class="depositheading">Transfer History</p>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-2 icon-column">
                <a href="">
                    <img src="assets/images/money.png" alt="" width="30%">
                    <p class="depositheading">Withdrawal Info</p>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-2 icon-column">
                <a href="">
                    <img src="assets/images/human-resources.png" alt="" width="30%">
                    <p class="depositheading">My Clients</p>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-2 icon-column">
                <a href="">
                    <img src="assets/images/commision.png" alt="" width="30%">
                    <p class="depositheading">Commission</p>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container" style="height:100%;width:100%">
        <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
        <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
            {
                "autosize": true,
                "symbol": "OANDA:USDCAD",
                "interval": "D",
                "timezone": "Etc/UTC",
                "theme": "light",
                "style": "1",
                "locale": "in",
                "allow_symbol_change": true,
                "calendar": false,
                "support_host": "https://www.tradingview.com"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->
</div>

<?php
include 'footer.php';
?>