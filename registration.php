<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vTFX Pro: Top Forex Broker | MT5 Trading</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('assets/images/pexels-jonathanborba-14354118.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: robotics !important;
        }

        .fixed-width-container {
            width: 550px;
            padding: 100px 60px;
            background-color: white;
            height: 100%;
            padding-top: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Input box styling without border-radius */
        .form-control {
            border-radius: 0; /* No rounded corners */
            color: lightgray; /* Text color */
            padding: 10px 20px;
            border: 1px solid #ced4da; /* Light gray border */
            background-color: #f8f9fa; /* Slightly off-white background */
            box-shadow: none; /* Remove shadow */
        }

        /* Password input with show/hide icon */
        .password-wrapper {
            position: relative;
        }
        .signup-text {
            text-align: center;
            margin-top: 20px;
        }

        .signup-text a {
            text-decoration: none;
            color: #007bff;
        }
        .password-wrapper .toggle-password {
            position: absolute;
            right: 10px;
            top: 65%;
            transform: translateY(-50%); /* Centers the icon vertically */
            cursor: pointer;
            display: flex; /* Added to center icon */
            align-items: center; /* Centers the icon vertically */
            justify-content: center; /* Centers horizontally */
        }

        /* Button styling */
        .btn-primary {
            width: 100%;
            border-radius: 25px; /* Rounded corners for the button */
        }

        /* Adjust margin for logo and other content on mobile */
        .text-center {
            margin-top: 20px;
        }

        .logo-image {
            width: 50%;
        }

        /* Hide background image and center the content for mobile */
        @media (max-width: 768px) {
            body {
                background-image: none;
            }

            .fixed-width-container {
                width: 100% !important;
                padding: 30px !important;
            }

            .logo-image {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="h-100">
        <div class="fixed-width-container">
            <div class="text-center mb-4" style="margin-top: 50px;">
                <img src="assets/images/logo.png" alt="BitDelta Logo" class="img-fluid logo-image">
            </div>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name*">
                </div>
                <div class="mb-3">
                    <label for="phonenumber" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phonenumber" placeholder="Phone Number*">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="mb-3 password-wrapper">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                    <span class="toggle-password">
                        <img src="https://cdn-icons-png.flaticon.com/512/159/159604.png" alt="Show/Hide Icon" width="20" id="toggleIcon">
                    </span>
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
                <div class="signup-text">
                    <p>Do you have a account <a href="login.php">log in</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Toggle password visibility
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');

        toggleIcon.addEventListener('click', function () {
            // Toggle the type attribute
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the icon image (optional)
            if (type === 'password') {
                toggleIcon.src = 'https://cdn-icons-png.flaticon.com/512/159/159604.png'; // closed eye
            } else {
                toggleIcon.src = 'https://cdn-icons-png.flaticon.com/512/565/565655.png'; // open eye
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
