<?php
// admin.php - Admin Login Page
session_start(); // Start session to check authentication status

// Redirect to admin dashboard if already logged in as admin
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: admin/dashboard.php");
    exit;
}

include 'includes/header.php';
?>

<main class="container mt-5">
    <section class="text-center">
        <h1 class="mb-4">Admin Login</h1>
        <p class="lead">Access the admin panel to manage the website.</p>
    </section>
    
    <?php if (isset($_SESSION['admin_error'])): ?>
        <div class="alert alert-danger text-center">
            <?= htmlspecialchars($_SESSION['admin_error']) ?>
        </div>
        <?php unset($_SESSION['admin_error']); ?>
    <?php endif; ?>
    
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-4 shadow">
                <form action="admin/login_process.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(session_id()); ?>">
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
                <div class="text-center mt-3">
                    <a href="index.php">Return to site</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'includes/footer.php';
?>