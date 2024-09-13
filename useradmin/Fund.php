<?php
include 'sidebar.php';
?>
<style>
    .funds-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
    }

    .funds-header h5 {
        margin: 0;
        font-weight: bold;
    }

    .balance-section {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .balance-section h3 {
        margin-right: 5px;
    }

    /* Default desktop layout */
    .wallet-buttons {
        display: flex;
        gap: 10px;
    }

    .wallet-buttons button {
        border-radius: 25px;
        padding: 10px 20px;
        font-size: 1rem;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-outline-primary {
        border-color: #cce5ff;
    }

    .btn a {
        color: inherit;
        /* Use the same color as the button */
        text-decoration: none;
        /* Remove underline */
    }

    .btn a:hover {
        color: inherit;
        /* Keep color the same on hover */
    }

    /* On mobile view, make buttons inline */
    @media (max-width: 768px) {
        .wallet-buttons {
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .wallet-buttons button {
            flex: 1;
            /* Ensure buttons take up equal space */
            margin-bottom: 10px;
            /* Add spacing between buttons */
        }

        .funds-header h5 {
            font-size: 0.9rem;
        }
    }
</style>
</head>

<body>
    <div class="container my-4">
        <!-- Funds Header -->
        <div class="funds-header">
            <h5>My Funds</h5>
            <div>
                <button class="btn btn-outline-secondary me-2"><a href="Transactions.php">Transactions</a></button>
                <button class="btn btn-outline-secondary"><a href="deposite.php">Request History</a></button>
            </div>
        </div>

        <!-- Balance Section -->
        <div class="balance-section">
            <h3>USD</h3>
            <h1>0</h1>
        </div>

        <!-- Wallet Buttons -->
        <div class="wallet-buttons mb-4">
            <button class="btn btn-primary btn-lg d-flex align-items-center">
                <i class="bi bi-wallet2 me-2"></i> Deposit
            </button>
            <button class="btn btn-outline-primary btn-lg d-flex align-items-center">
                <i class="bi bi-arrow-left-right me-2"></i> Transfer
            </button>
            <button class="btn btn-outline-primary btn-lg d-flex align-items-center">
                <i class="bi bi-credit-card me-2"></i> Withdraw
            </button>
        </div>
    </div>
    <!--  -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Wallet</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Currency</th>
                                <th scope="col">Total Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>