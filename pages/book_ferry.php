<?php
// pages/book_ferry.php - Ferry Booking Page
include '../includes/header.php';
?>

<main class="container mt-5">
    <section class="text-center">
        <h1 class="mb-4">Book a Ferry</h1>
        <p class="lead">Reserve a ferry for your comfortable water journey.</p>
    </section>
    
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4 shadow">
                <form action="book_ferry_process.php" method="POST">
                    <div class="mb-3">
                        <label for="departure" class="form-label">Departure Port</label>
                        <input type="text" class="form-control" id="departure" name="departure" required>
                    </div>
                    <div class="mb-3">
                        <label for="destination" class="form-label">Destination Port</label>
                        <input type="text" class="form-control" id="destination" name="destination" required>
                    </div>
                    <div class="mb-3">
                        <label for="passengers" class="form-label">Number of Passengers</label>
                        <input type="number" class="form-control" id="passengers" name="passengers" min="1" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Departure Date & Time</label>
                        <input type="datetime-local" class="form-control" id="date" name="date" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Book Now</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include '../includes/footer.php';
?>
