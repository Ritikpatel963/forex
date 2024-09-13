<?php
include 'sidebar.php';
?>
<style>
    .card-container {
        border-radius: 12px !important;
        padding: 50px !important;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1) !important;
        margin-bottom: 0;
    }

    .icon-large {
        font-size: 1.7rem !important;
        margin-right: 12px !important;
    }

    .btn-custom {
        background-color: #00a2ff !important;
        color: white !important;
        border-radius: 25px !important;
        padding: 10px 25px !important;
    }



    .custom-item {
        text-align: center;
        margin-bottom: 20px;
    }

    .custom-item img {
        width: 50px;
        height: 50px;
        margin-bottom: 10px;
    }

    .custom-border-line {
        border-top: 1px solid #dcdcdc;
        margin: 10px 0;
    }
</style>

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- *************************************************************** -->
        <div class="">
            <div class="row">
                <!-- First Card -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card">
                        <!-- Bootstrap Card Header -->
                        <div class="card-header d-flex align-items-center">
                            <img src="assets/images/deposit.png" alt="Funds Icon" style="width: 50px; margin-right: 10px;">
                            <h6 class="m-0">My Funds</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold">USD 0</h5>
                            <button class="btn btn-primary">Deposit</button>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="col-lg-6 col-md-12 mb-4">
                <div class="card">
                        <!-- Bootstrap Card Header -->
                        <div class="card-header d-flex align-items-center">
                            <img src="assets/images/earnings.png" alt="Funds Icon" style="width: 50px; margin-right: 10px;">
                            <h6 class="m-0">My Funds</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold">USD 0</h5>
                            <button class="btn btn-primary">withdraw</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="">
            <div class="card custom-card">
                <!-- Bootstrap card-header -->
                <div class="card-header d-flex align-items-center" style="padding: 20px;">
                    <img src="assets/images/enter.png" alt="Quick Entry Icon" style="width: 40px; margin-right: 10px;">
                    <span>Quick Entry</span>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <div class="row text-center">
                        <!-- First Row -->
                        <div class="col-lg-4 col-md-6 col-sm-12 custom-item">
                            <a href="deposite.php" class="text-decoration-none">
                                <img src="assets/images/donation.png" alt="Deposit History">
                                <p>Deposit History</p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 custom-item">
                            <a href="withdrawal.php" class="text-decoration-none">
                                <img src="assets/images/cash-withdrawal.png" alt="Withdrawal History">
                                <p>Withdrawal History</p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 custom-item">
                            <a href="transfer-history.html" class="text-decoration-none">
                                <img src="assets/images/history.png" alt="Transfer History">
                                <p>Transfer History</p>
                            </a>
                        </div>

                        <!-- Second Row -->
                        <div class="col-lg-4 col-md-6 col-sm-12 custom-item">
                            <a href="withdrawal-info.html" class="text-decoration-none">
                                <img src="assets/images/withdraw.png" alt="Withdrawal Information">
                                <p>Withdrawal Information</p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 custom-item">
                            <a href="#" class="text-decoration-none">
                                <!-- Placeholder for future link -->
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 custom-item">
                            <a href="#" class="text-decoration-none">
                                <!-- Placeholder for future link -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




     

    <?php
    include 'footer.php';
    ?>