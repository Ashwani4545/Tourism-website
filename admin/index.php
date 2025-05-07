<?php
// admin/index.php - Admin Login Page
include '../includes/header.php';
?>

<main class="container mt-5">
    <section class="text-center">
        <h1 class="mb-4">Admin Login</h1>
        <p class="lead">Access the admin dashboard to manage the website.</p>
    </section>
    
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-4 shadow">
                <form action="login_process.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include '../includes/footer.php';
?>
