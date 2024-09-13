<?php
include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile & Address Book</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-photo {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
        }

        .profile-card {
            max-width: 600px;
            margin: auto;
        }

        .profile-details th {
            width: 150px;
        }

        .profile-details td {
            padding-left: 15px;
        }

        .section-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 20px;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
        }

        .list-group-item.active {
            background: linear-gradient(to right, #8971ea, #7f72ea, #7574ea, #6a75e9, #5f76e8);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 4% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 70%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }

        .close {
            float: right;
            font-size: 30px;
        }

        .modal-content h2 {
            text-align: center;
        }

        .button_div {
            justify-content: center;
            text-align: center;
        }

        .button_div button {
            margin-right: 10px;
            background: #06C167;
            border: 1px solid #06C167;
            padding: 5px 15px;
            color: #FFFFFF;
            border-radius: 2px;
        }

        .add_address_button {
            background: #06C167;
            border: 1px solid #06C167;
            padding: 5px 15px;
            color: #FFFFFF;
            border-radius: 2px;
        }

        @media (max-width: 768px) {
            .modal-content {
                padding: 10px 0 !important;
                width: 95% !important;
                height: 700px;
                overflow: scroll;
            }

            .close {
                margin-right: 10px;
            }
        }
    </style>
</head>

<body>
    <section class="my-5">
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://via.placeholder.com/150" alt="Admin" class="rounded-circle bg-warning profile-photo">
                                    <div class="mt-3">
                                        <h4>Jyoti</h4>
                                        <p class="text-secondary mb-1">+91 7493658737</p>
                                        <p class="text-muted font-size-sm">Delhi, NCR</p>
                                    </div>
                                </div>
                                <div class="list-group list-group-flush text-center mt-4">
                                    <a href="#" class="list-group-item list-group-item-action border-0" onclick="showProfileDetails()">
                                        Profile Information
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-0 active" onclick="showAddressBook()">
                                        Address Book
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-0" onclick="logout()">
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div id="profileDetails" class="card" style="display: none;">
                            <div class="card-body">
                                <h5>Profile Information</h5>
                                <p><strong>Name:</strong> Jyoti</p>
                                <p><strong>Email Address:</strong> jyoti@gmail.com</p>
                                <p><strong>Contact:</strong> +91 7493658737</p>
                                <p><strong>Date of Birth:</strong> 02-03-1999</p>
                                <p><strong>Gender:</strong> Female</p>
                                <p><strong>City:</strong> Delhi, NCR</p>
                                <p><strong>Height:</strong> 5.4</p>
                                <p><strong>Weight:</strong> 50</p>
                                <p><strong>Goal:</strong> Hair & Skin</p>
                                <p><strong>Preference:</strong> Pure Vegetarian</p>
                                <p><strong>Role:</strong> User</p>
                            </div>
                        </div>

                        <div id="addressBook" class="card">
                            <div class="card-body">
                                <h5>Address Book</h5>
                                <button class="add_address_button" onclick="showAddAddressModal()">Add Address</button>
                                <div id="addressList"></div>
                            </div>
                        </div>

                        <!-- Add Address Modal -->
                        <div id="addAddressModal" class="modal" style="display: none;">
                            <div class="modal-content">
                                <span class="close" onclick="closeAddAddressModal()">&times;</span>
                                <h2>Add Address</h2>
                                <form id="addAddressForm" onsubmit="saveAddress(event)">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name">Name:</label>
                                            <input type="text" id="name" class="form-control" required><br>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="mobile">Mobile No.:</label>
                                            <input type="tel" id="mobile" class="form-control" required pattern="[0-9]{10}"><br>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="pincode">Pin code:</label>
                                            <input type="text" id="pincode" class="form-control" required><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="locality">Locality:</label>
                                            <input type="text" id="locality" class="form-control" required><br>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="city">City/District/Town:</label>
                                            <input type="text" id="city" class="form-control" required><br>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="state">State:</label>
                                            <select id="state" class="form-control" required>
                                                <option value="">Select a state</option>
                                                <option value="State 1">State 1</option>
                                                <option value="State 2">State 2</option>
                                                <option value="State 3">State 3</option>
                                            </select><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="address">Address:</label>
                                            <textarea id="address" class="form-control" required></textarea><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="landmark">Landmark (Optional):</label>
                                            <input type="text" id="landmark" class="form-control"><br>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="alternatePhone">Alternate Phone (Optional):</label>
                                            <input type="tel" id="alternatePhone" class="form-control" pattern="[0-9]{10}"><br>
                                        </div>
                                    </div>
                                    <div class="button_div">
                                        <button type="submit">Save</button>
                                        <button type="button" onclick="closeAddAddressModal()">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        function showAddAddressModal() {
            const modal = document.getElementById('addAddressModal');
            modal.style.display = 'block';
        }

        function closeAddAddressModal() {
            const modal = document.getElementById('addAddressModal');
            modal.style.display = 'none';
        }

        function showProfileDetails() {
            hideAllSections();
            document.getElementById('profileDetails').style.display = 'block';
            setActiveLink(0);
        }

        function showAddressBook() {
            hideAllSections();
            document.getElementById('addressBook').style.display = 'block';
            setActiveLink(1);
        }

        function hideAllSections() {
            document.getElementById('profileDetails').style.display = 'none';
            document.getElementById('addressBook').style.display = 'none';
        }

        function setActiveLink(index) {
            const items = document.querySelectorAll('.list-group-item');
            items.forEach(item => item.classList.remove('active'));
            items[index].classList.add('active');
        }
        function logout() {
        alert('Logout functionality not implemented.');
    }

        // Show profile details by default
        showProfileDetails();
    </script>

    <?php
    include 'footer.php';
    ?>