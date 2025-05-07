<?php
session_start();
include 'config/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate inputs
    if (empty($name) || empty($email) || empty($phone) || empty($password) || empty($confirm_password)) {
        echo "<script>
            alert('Please fill all fields');
            window.location.href = 'register.php';
        </script>";
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
            alert('Please enter a valid email address');
            window.location.href = 'register.php';
        </script>";
        exit();
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<script>
            alert('Passwords do not match');
            window.location.href = 'register.php';
        </script>";
        exit();
    }

    try {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        
        if ($stmt->rowCount() > 0) {
            echo "<script>
                alert('Email already registered');
                window.location.href = 'register.php';
            </script>";
            exit();
        }

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $hashed_password]);

        echo "<script>
            alert('Registration successful! Please login.');
            window.location.href = 'login.php';
        </script>";
        exit();

    } catch(PDOException $e) {
        echo "<script>
            alert('Registration failed. Please try again.');
            window.location.href = 'register.php';
        </script>";
        exit();
    }
} else {
    // If someone tries to access this file directly
    header("Location: register.php");
    exit();
}
?>