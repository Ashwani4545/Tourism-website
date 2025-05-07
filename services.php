<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Website</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css"> 
    
    <!-- JavaScript -->
    <script src="assets/js/script.js" defer></script>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <main class="container mt-5">
        <section class="text-center">
            <h1 class="mb-4" data-translate="services_title">Our Services</h1>
            <p class="lead" data-translate="services_subtitle">Explore the services we offer to make your trip enjoyable.</p>
        </section>

        <section class="services">
            <div class="row">
                <!-- Cab Booking -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center p-4 shadow">
                        <i class="bi bi-car-front display-3 text-primary"></i>
                        <h5 class="mt-3">Cab Booking</h5>
                        <p>Book a cab for comfortable city travel.</p>
                        <a href="https://www.makemytrip.com/car-rental/varanasi-city-cabs.html?msockid=029cbc4ec4d869f92f60a9c8c5de688b" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <!-- Ferry Services -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center p-4 shadow">
                        <i class="bi bi-boat display-3 text-info"></i>
                        <h5 class="mt-3">Ferry Services</h5>
                        <p>Reserve a ferry for easy water travel.</p>
                        <a href="https://alaknandacruise.com" class="btn btn-info">Book Now</a>
                    </div>
                </div>

                <!-- Tour Packages -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center p-4 shadow">
                        <i class="bi bi-binoculars display-3 text-warning"></i>
                        <h5 class="mt-3">Tour Packages</h5>
                        <p>Plan a guided tour to the best attractions.</p>
                        <a href="https://www.makemytrip.com/holidays-india/varanasi-travel-packages.html?msockid=029cbc4ec4d869f92f60a9c8c5de688b" class="btn btn-warning">Book Now</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
