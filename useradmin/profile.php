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
        .list-group-item.active {
            background-color: #fdd835;
            color: #000;
        }

        .list-group-item-action i {
            margin-right: 8px;
        }

        .form-control {
            border-radius: 0.25rem;
            padding: 0.75rem;
        }

        .btn-warning {
            background-color: #fdd835;
            color: #000;
        }

        .img-thumbnail {
            max-width: 150px;
            max-height: 150px;
            object-fit: cover;
        }
        .savebutton{
            background: linear-gradient(to right,#8971ea,#7f72ea,#7574ea,#6a75e9,#5f76e8);
            color: white;
        }
        .savebutton:hover{
            color: white;
        }
        @media (max-width: 768px) {
            .col-lg-3 {
                text-align: center;
            }

            .col-lg-3 img {
                margin: 0 auto;
            }

            .col-lg-6 {
                text-align: center;
            }

            form {
                margin: 0 auto;
            }
            .editprofile{
                margin-top: 50px;
            }
        }
    </style>
</head>

<body>

    <!--  -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 text-center">
                <img src="https://via.placeholder.com/150" class="rounded-circle img-thumbnail mb-3" alt="Profile Image">
                <div>
                    <button class="btn btn-outline-primary btn-sm mb-2">Change Avatar</button>
                    <br>
                    <button class="btn btn-outline-danger btn-sm">Delete Avatar</button>
                </div>
            </div>
            <!-- Second Column: Profile Form -->
            <div class="col-lg-9 mb-4 editprofile">
                <h4>Edit your profile</h4>
                <form>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                    </div>
                    <div class="mb-3">
                        <label for="birthDate" class="form-label">Birthday</label>
                        <input type="date" class="form-control" id="birthDate">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea class="form-control" id="bio" placeholder="Type something about you"></textarea>
                    </div>
                    <button type="submit" class="btn savebutton">Save Changes</button>
                </form>
            </div>           
        </div>
    </div>
    <!--  -->


    <?php
    include 'footer.php';
    ?>