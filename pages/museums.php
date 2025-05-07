<?php
// pages/museums.php - Page for Museums in Varanasi
include '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Museums in Varanasi</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<main class="container mt-5">
    <section class="text-center">
        <h1 class="mb-4">Museums in Varanasi</h1>
        <p class="lead">Explore the rich history and culture of Varanasi through its museums</p>
        <input type="text" id="searchMuseum" class="form-control my-3" placeholder="Search Museums...">
    </section>
    
    <div class="row" id="museumList">
        <?php 
        $museums = [
            ["name" => "Bharat Kala Bhavan", "image" => "../assets/images/bharat_kala_bhavan.jpg", "description" => "A renowned museum in BHU showcasing Indian art, culture, and history."],
            ["name" => "Ramnagar Fort Museum", "image" => "../assets/images/ramnagar_fort_museum.jpg", "description" => "Located in Ramnagar Fort, this museum displays royal artifacts, weapons, and vintage cars."],
            ["name" => "Sarnath Museum", "image" => "../assets/images/sarnath_museum.jpg", "description" => "A historical museum preserving ancient Buddhist sculptures and artifacts from Sarnath."],
            ["name" => "Jantar Mantar", "image" => "../assets/images/jantar_mantar.jpg", "description" => "An astronomical observatory built by Maharaja Jai Singh, showcasing scientific advancements."],
            ["name" => "Bharat Mata Mandir", "image" => "../assets/images/bharat_mata_mandir.jpg", "description" => "A unique temple featuring a marble relief map of India, symbolizing national unity."],
        ];
    
        foreach ($museums as $museum) {
            echo '<div class="col-lg-3 col-md-4 col-sm-6 col-12 museum-card">'; // 4 per row on large screens
            echo '<div class="card">';
            echo '<img src="'.$museum["image"].'" class="card-img-top">';
            echo '<div class="card-body">';
            echo '<h2 class="card-title">'.$museum["name"].'</h2>';
            echo '<p class="card-text">'.$museum["description"].'</p>';
            echo '<button class="btn btn-primary">Read More</button>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    ?>
    </div>
</main>

<script>
// Search Functionality
document.getElementById("searchMuseum").addEventListener("keyup", function() {
    let filter = this.value.toLowerCase();
    let cards = document.querySelectorAll(".museum-card");
    cards.forEach(card => {
        let name = card.querySelector(".card-title").innerText.toLowerCase();
        card.style.display = name.includes(filter) ? "block" : "none";
    });
});
</script>

<!-- Footer -->
<footer class="text-center mt-5">
    <p>&copy; 2025 Varanasi Tourism. All Rights Reserved.</p>
</footer>

</body>
</html>
