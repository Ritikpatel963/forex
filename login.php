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
            border-radius: 0;
            color: lightgray;
            padding: 10px 20px;
            border: 1px solid #ced4da;
            background-color: #f8f9fa;
            box-shadow: none;
        }

        /* Password input with show/hide icon */
        .password-wrapper {
            position: relative;
        }

        .password-wrapper .toggle-password {
            position: absolute;
            right: 10px;
            top: 65%;
            transform: translateY(-50%);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Button styling */
        .btn-primary {
            width: 100%;
            border-radius: 25px;
        }

        /* Forgot password and signup link */
        .forgot-password {
            text-align: right;
            margin-bottom: 20px;
        }

        .forgot-password a {
            text-decoration: none;
            color: #007bff;
        }

        .signup-text {
            text-align: center;
            margin-top: 20px;
        }

        .signup-text a {
            text-decoration: none;
            color: #007bff;
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
                <img src="assets/images/logo.png" alt=" Logo" class="img-fluid logo-image">
            </div>
            <form>
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

                <div class="forgot-password">
                    <a href="forgetpassword.php">Forgot Password?</a>
                </div>

                <button type="submit" class="btn btn-primary">Sign In</button>

                <div class="signup-text">
                    <p>Don't have an account? <a href="registration.php">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');

        toggleIcon.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            if (type === 'password') {
                toggleIcon.src = 'https://cdn-icons-png.flaticon.com/512/159/159604.png'; 
            } else {
                toggleIcon.src = 'https://cdn-icons-png.flaticon.com/512/565/565655.png'; 
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
