<?php
include 'sidebar.php';
?>
<style>
    .card {
        border-radius: 15px;
        border: none;
    }

    .card h5,
    .card p {
        color: #333;
    }

    .card .btn {
        border-radius: 50px;
    }

    .table-responsive {
        margin-top: 15px;
    }

    .text-danger {
        color: red !important;
    }

    .text-success {
        color: green !important;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }

    @media (max-width: 768px) {
        .table-responsive {
            font-size: 14px;
        }

        .card .btn {
            font-size: 12px;
        }
    }

    .custom-card {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        background: linear-gradient(85deg, rgba(253, 121, 148, 1) 0%, rgba(253, 126, 169, 1) 100%);
        border-radius: 20px;
        padding: 20px;
        max-width: 100%;
        color: white;
        margin: 10px 0;
    }

    .custom-card-content {
        flex: 1;
        max-width: 60%;
    }

    .custom-card-content h3 {
        font-size: 35px;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .custom-card-content p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .custom-apply-btn {
        background: linear-gradient(to right, #8971ea, #7f72ea, #7574ea, #6a75e9, #5f76e8);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .custom-apply-btn:hover {
        background: linear-gradient(to right, #8971ea, #7f72ea, #7574ea, #6a75e9, #5f76e8);
    }

    .custom-card-img {
        max-width: 35%;
        border-radius: 15px;
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .custom-card {
            flex-direction: column;
            text-align: center;
        }

        .custom-card-content {
            max-width: 100%;
            margin-bottom: 15px;
        }

        .custom-card-img {
            max-width: 80%;
        }
    }
</style>
</head>

<body>
    <!--  -->

    <!--  -->
    <div class="container my-4">
        <!-- First Section - User Wallet Information -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="custom-card">
                    <div class="custom-card-content">
                        <h3>Deposit</h3>
                        <p>You can securely deposit money into your account anytime, anywhere with our 24/7 online service.</p>
                        <button class="custom-apply-btn">Deposit Money</button>
                    </div>
                    <img src="assets/images/savings.png" alt="Illustration" class="custom-card-img">
                </div>

            </div>
            <div class="col-md-6">
                <div class="custom-card">
                    <div class="custom-card-content">
                        <h3>Withdraw</h3>
                        <p>You can easily withdraw money from your account at any time with our fast and secure withdrawal service.</p>
                        <button class="custom-apply-btn">Withdraw Money</button>
                    </div>
                    <img src="assets/images/purse.png" alt="Illustration" class="custom-card-img">
                </div>
            </div>
        </div>

        <!-- Third Section - Recent Transactions Table -->
        <div class="card p-3">
            <h4>Recent Transactions</h4>
            <div class="recent-transactions">
            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead>
                        <tr>
                        <tr>
                            <th>Order ID</th>
                            <th>Trading Account</th>
                            <th>Type</th>
                            <th>Account Details</th>
                            <th>Date Created</th>
                        </tr>

                        </tr>

                    </thead>
                    <tbody>
                        <tr>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--  -->
    <?php
    include 'footer.php';
    ?>