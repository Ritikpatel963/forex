<?php
include 'sidebar.php';
?>
<style>
    .funds-card {
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
            max-width: 100%;
        }
        .funds-icon {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .funds-icon i {
            margin-right: 10px;
        }
        .currency-section {
            display: flex;
            align-items: center;
            font-size: 2rem;
        }
        .currency-section i {
            margin-right: 8px;
        }
        .deposit-btn {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }
        .deposit-btn i {
            margin-right: 8px;
        }
        .deposit-btn:hover {
            background-color: #0056b3;
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
<div class="container mt-5">
        <div class="funds-card p-3">
            <!-- First Row: My Funds Title -->
            <div class="row">
                <div class="col-12">
                    <div class="funds-icon">
                        <i data-feather="dollar-sign" class="feather-icon"></i>
                        <span>My Funds</span>
                    </div>
                </div>
            </div>

            <!-- Second Row: USD Icon, Amount 0, and Deposit Button -->
            <div class="row align-items-center">
                <div class="col-md-9 col-8">
                    <div class="currency-section">
                        <i data-feather="dollar-sign" class="feather-icon"></i> 
                        <span>USD</span>
                        <span style="margin-left: 15px;">0</span>
                    </div>
                </div>
                <div class="col-md-3 col-4 text-end">
                    <button class="deposit-btn">
                        <i data-feather="credit-card" class="feather-icon"></i> Deposit
                    </button>
                </div>
            </div>
        </div>
    </div>








<?php
include 'footer.php';
?>