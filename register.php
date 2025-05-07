<?php
session_start();
include 'config/db_connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/tourism_website/assets/css/style.css">
    <script defer src="/tourism_website/assets/js/scripts.js"></script>
</head>
<body class="register-page">
<main class="register-container">
    <section class="text-center">
        <h1 class="mb-4">User Registration</h1>
        <p class="lead">Create an account to access exclusive features.</p>
    </section>
    
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card register-card">
                <form action="register_process.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="number" name="number" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include 'includes/footer.php'; ?>
</body>
</html>