<?php include '../includes/header.php'; ?>
<?php include '../config/db_connect.php'; ?> <!-- Include PDO connection -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cab Booking</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="cab-booking-container">
        <div class="booking-form">
            <h1>🚖 CAB BOOKING FORM</h1>
            <div class="booking-header">
                <h2>📌 BOOK CAB NOW</h2>
            </div>

            <form action="book_cab.php" method="POST">
                <label for="name">Name :</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>

                <label for="phone">Phone Number :</label>
                <input type="text" id="phone" name="phone" placeholder="Your Phone Number" required>

                <label for="pickup">Pickup Location :</label>
                <input type="text" id="pickup" name="pickup" placeholder="Enter an origin location" required>

                <label for="dropoff">Drop Location :</label>
                <input type="text" id="dropoff" name="dropoff" placeholder="Enter a destination location" required>

                <label for="date">Pickup Date :</label>
                <input type="date" id="date" name="date" required>

                <label for="time">Pickup Time :</label>
                <input type="time" id="time" name="time" required>

                <button type="submit" class="btn-submit">🚖 BOOK MY CAB</button>
            </form>

            <?php
include '../config/db_connect.php'; // Use the existing database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $pickup = $_POST['pickup'];
    $dropoff = $_POST['dropoff'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    try {
        $sql = "INSERT INTO cab_bookings (name, phone, pickup, dropoff, date, time) 
                VALUES (:name, :phone, :pickup, :dropoff, :date, :time)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':phone' => $phone,
            ':pickup' => $pickup,
            ':dropoff' => $dropoff,
            ':date' => $date,
            ':time' => $time
        ]);

        echo "<script>alert('Cab booked successfully!'); window.location='book_cab.php';</script>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>


        </div>
    </div>

    <footer class="text-center mt-5">
    <p>&copy; 2025 Varanasi Cab Booking. All Rights Reserved.</p>
</footer>
</body>
</html>
