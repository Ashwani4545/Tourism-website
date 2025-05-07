<?php
// attractions.php - List of Attractions
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Website</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">  <!-- Link to style.css -->
    <script src="assets/js/script.js" defer></script>
</head>

<body>
<!-- Featured Attractions -->
<main class="container mt-5">
    <section class="text-center">
        <h1 class="mb-4">Top Attractions</h1>
        <p class="lead">Explore the most popular tourist attractions.</p>
    </section>

<section class="attractions">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card text-center p-4 shadow">
                <i class="bi bi-temple display-3 text-primary"></i>
                <h5 class="mt-3">Temples</h5>
                <p>Visit the sacred temples of kashi.</p>
                <a href="pages/temples.php" class="btn btn-primary">Learn more</a>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-center p-4 shadow">
                <i class="bi bi-boat display-3 text-info"></i>
                <h5 class="mt-3">Ghats</h5>
                <p>Enjoy the peace at ghats.</p>
                <a href="pages/ghats.php" class="btn btn-info">Learn more</a>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-center p-4 shadow">
                <i class="bi bi-binoculars display-3 text-warning"></i>
                <h5 class="mt-3">Museums</h5>
                <p>Explore the rich festivals of kashi.</p>
                <a href="pages/museums.php" class="btn btn-warning">Learn more</a>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-center p-4 shadow">
                <i class="bi bi-binoculars display-3 text-warning"></i>
                <h5 class="mt-3">Forts</h5>
                <p>Explore the old monuments of kashi.</p>
                <a href="pages/museums.php" class="btn btn-warning">Learn more</a>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-center p-4 shadow">
                <i class="bi bi-binoculars display-3 text-warning"></i>
                <h5 class="mt-3">Parks</h5>
                <p>Freshen up your mind by exercise and running.</p>
                <a href="pages/varanasi_parks.php" class="btn btn-warning">Learn more</a>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-center p-4 shadow">
                <i class="bi bi-binoculars display-3 text-warning"></i>
                <h5 class="mt-3">Festivals</h5>
                <p>Explore the various festivals and their way of celebrations.</p>
                <a href="pages/festivals.php" class="btn btn-warning">Learn more</a>
            </div>
        </div>
    </div>
</section>
</main>
<?php
// attractions.php - List of Attractions
include 'includes/footer.php';
?>
</body>
</html>