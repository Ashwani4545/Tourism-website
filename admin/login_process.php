<?php
session_start();
include '../config/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verify CSRF token
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== session_id()) {
        $_SESSION['admin_error'] = "Invalid request";
        header("Location: ../admin.php");
        exit();
    }

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND role = 'admin' LIMIT 1");
        $stmt->execute([$email]);
        $admin = $stmt->fetch();

        if ($admin && password_verify($password, $admin['password'])) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_name'] = $admin['name'];
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION['admin_error'] = "Invalid email or password";
            header("Location: ../admin.php");
            exit();
        }
    } catch (PDOException $e) {
        $_SESSION['admin_error'] = "Login failed. Please try again.";
        header("Location: ../admin.php");
        exit();
    }
}

header("Location: ../admin.php");
exit();
?>