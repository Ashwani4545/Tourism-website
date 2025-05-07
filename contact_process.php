<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate inputs
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "<script>
            alert('Please fill all the fields');
            window.location.href='contact.php';
        </script>";
        exit;
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
            alert('Please enter a valid email address');
            window.location.href='contact.php';
        </script>";
        exit;
    }

    // You can add email sending functionality here using PHP mail() or a library like PHPMailer
    // For now, we'll just redirect with a success message
    echo "<script>
        alert('Thank you for your message! We will get back to you soon.');
        window.location.href='contact.php';
    </script>";
    exit;
} else {
    // If someone tries to access this file directly
    header("Location: contact.php");
    exit;
}
?>