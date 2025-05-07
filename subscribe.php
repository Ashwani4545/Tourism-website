<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Here you would typically:
        // 1. Connect to your database
        // 2. Store the email
        // 3. Send a confirmation email
        
        // For now, we'll just send a success message
        echo "<script>
            alert('Thank you for subscribing!');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Please enter a valid email address');
            window.location.href = 'index.php';
        </script>";
    }
} else {
    // If someone tries to access this file directly, redirect them to the homepage
    header("Location: index.php");
    exit();
}
?>