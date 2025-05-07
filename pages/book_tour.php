<?php
// pages/book_tour.php - Tour Booking Page
include '../includes/header.php';
?>

<main class="container mt-5">
    <section class="text-center">
        <h1 class="mb-4">Book a Tour</h1>
        <p class="lead">Plan your perfect tour with ease.</p>
    </section>
    
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4 shadow">
                <form action="book_tour_process.php" method="POST">
                    <div class="mb-3">
                        <label for="destination" class="form-label">Tour Destination</label>
                        <input type="text" class="form-control" id="destination" name="destination" required>
                    </div>
                    <div class="mb-3">
                        <label for="travelers" class="form-label">Number of Travelers</label>
                        <input type="number" class="form-control" id="travelers" name="travelers" min="1" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tour Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="package" class="form-label">Select Package</label>
                        <select class="form-select" id="package" name="package">
                            <option value="Standard">Standard</option>
                            <option value="Premium">Premium</option>
                            <option value="Luxury">Luxury</option>
                        </select>
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
