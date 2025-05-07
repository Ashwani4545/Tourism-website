<?php include 'includes/header.php'; ?>

<?php
include 'db_connect.php';
$user_id = $_POST['user_id'];
$boat_type = $_POST['boat_type'];
$booking_time = $_POST['booking_time'];
$sql = "INSERT INTO ferry_bookings (user_id, boat_type, booking_time) VALUES ('$user_id', '$boat_type', '$booking_time')";
if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>

<?php include 'includes/footer.php'; ?>
<?php
    if (!isset($conn)) { die("Database connection missing."); }
    echo $conn->error;
    $conn->close();
    ?>