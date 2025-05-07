<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: ../admin.php");
    exit();
}

include '../includes/header.php';
?>

<div class="container mt-5">
    <h1>Admin Dashboard</h1>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Users</h5>
                    <p class="card-text">View and manage user accounts</p>
                    <a href="manage_users.php" class="btn btn-primary">Manage Users</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Attractions</h5>
                    <p class="card-text">Add or edit tourist attractions</p>
                    <a href="manage_attractions.php" class="btn btn-primary">Manage Attractions</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Bookings</h5>
                    <p class="card-text">View and manage travel bookings</p>
                    <a href="manage_bookings.php" class="btn btn-primary">Manage Bookings</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
