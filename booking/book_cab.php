<?php include 'includes/header.php'; ?>

<?php
include 'db_connect.php';
$user_id = $_POST['user_id'];
$pickup = $_POST['pickup'];
$dropoff = $_POST['dropoff'];
$fare = $_POST['fare'];
$sql = "INSERT INTO cabs (user_id, pickup_location, dropoff_location, fare) VALUES ('$user_id', '$pickup', '$dropoff', '$fare')";
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