<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: ../admin.php");
    exit();
}

// admin/manage_users.php - Manage Users Page
session_start(); // Start session to check authentication

// Check if user is logged in and is an admin
if (!isset($_SESSION['logged_in']) || !isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

// Check admin privileges (implement based on your user role system)
// This is a placeholder - modify based on how you track admin status
$is_admin = false; // Set to true for admin users
if (!$is_admin) {
    header("Location: ../dashboard.php");
    exit();
}

include '../includes/header.php';
include '../db_connect.php'; // Include database connection

// Query to fetch all users
$query = "SELECT id, name, email FROM users";
$result = $conn->query($query);
?>

<main class="container mt-5">
    <section class="text-center">
        <h1 class="mb-4">Manage Users</h1>
        <p class="lead">View and manage registered users.</p>
    </section>
    
    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?= $_SESSION['message_type'] ?>">
            <?= $_SESSION['message'] ?>
        </div>
        <?php 
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
        ?>
    <?php endif; ?>
    
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($user = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id']) ?></td>
                        <td><?= htmlspecialchars($user['name']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td>
                            <a href="edit_user.php?id=<?= $user['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="delete_user.php?id=<?= $user['id'] ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">No users found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</main>

<?php
$conn->close(); // Close database connection
include '../includes/footer.php';
?>