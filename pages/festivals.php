<?php
// pages/festivals.php - Page for Festivals in Varanasi
include '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Festivals of Varanasi</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<main class="container mt-5">
    <section class="text-center">
        <h1 class="mb-4">Festivals of Varanasi</h1>
        <p class="lead">Discover the vibrant festivals celebrated in the spiritual capital of India.</p>
        <input type="text" id="searchFestival" class="form-control my-3" placeholder="Search Festivals...">
    </section>
    
    <div class="row g-4" id="festivalList">
        <?php 
        $festivals = [
            ["name" => "Dev Deepawali", "date" => "November (Kartik Purnima)", "image" => "../assets/images/dev_deepawali.jpg", "description" => "Ganga ghats are lit with thousands of diyas, along with grand Ganga Aarti and cultural programs."],
            ["name" => "Mahashivaratri", "date" => "February/March", "image" => "../assets/images/mahashivratri.jpg", "description" => "Huge gatherings at Kashi Vishwanath Temple, fasts, and grand Shiva processions."],
            ["name" => "Ganga Mahotsav", "date" => "November", "image" => "../assets/images/ganga_mahotsav.jpg", "description" => "Five-day cultural celebration with folk dance, classical music, and boat races."],
            ["name" => "Makar Sankranti", "date" => "January 14", "image" => "../assets/images/makar_sankranti.jpg", "description" => "Colorful kite flying festival with special sweets and holy dips in the Ganges."],
            ["name" => "Holi", "date" => "March", "image" => "../assets/images/holi.jpg", "description" => "Festival of colors with bhang thandai, music, and temple celebrations."],
            ["name" => "Annakut and Govardhan Puja", "date" => "October/November", "image" => "../assets/images/govardhan_puja.jpg", "description" => "Huge mounds of food offered to Lord Krishna with kirtans and bhajans."],
            ["name" => "Ramlila of Ramnagar", "date" => "September/October", "image" => "../assets/images/ramlila.jpg", "description" => "Month-long enactment of Ramayana with royal participation."],
            ["name" => "Nag Nathaiya", "date" => "October/November", "image" => "../assets/images/nag_nathaiya.jpg", "description" => "Reenactment of Krishna's victory over Kaliya serpent at Tulsi Ghat."],
            ["name" => "Buddha Purnima", "date" => "April/May", "image" => "../assets/images/buddha_purnima.jpg", "description" => "Celebration at Sarnath with prayers and meditation."],
            ["name" => "Chhath Puja", "date" => "October/November", "image" => "../assets/images/chhath_puja.jpg", "description" => "Sun worship at sunrise and sunset with fasting and holy dips."],
            ["name" => "Durga Puja", "date" => "September/October", "image" => "../assets/images/durga_puja.jpg", "description" => "Grand Durga idol installations, aartis, and idol immersion ceremonies."],
            ["name" => "Kartik Purnima", "date" => "November", "image" => "../assets/images/kartik_purnima.jpg", "description" => "Holy dip in the Ganges with special prayers and charity events."],
            ["name" => "Hanuman Jayanti", "date" => "March/April", "image" => "../assets/images/hanuman_jayanti.jpg", "description" => "Grand celebrations at Sankat Mochan Hanuman Temple with bhajans and kirtans."],
        ];
    
        foreach ($festivals as $festival) {
            echo '<div class="col-lg-3 col-md-4 col-sm-6 col-12">';
            echo '<div class="card shadow-sm">';
            echo '<img src="'.$festival["image"].'" class="card-img-top">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">'.$festival["name"].'</h5>';
            echo '<p class="card-text"><strong>Date:</strong> '.$festival["date"].'</p>';
            echo '<p class="card-text">'.$festival["description"].'</p>';
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
document.getElementById("searchFestival").addEventListener("keyup", function() {
    let filter = this.value.toLowerCase();
    let cards = document.querySelectorAll(".card");
    cards.forEach(card => {
        let name = card.querySelector(".card-title").innerText.toLowerCase();
        card.parentElement.style.display = name.includes(filter) ? "block" : "none";
    });
});
</script>

<!-- Footer -->
<footer class="text-center mt-5">
    <p>&copy; 2025 Varanasi Festivals. All Rights Reserved.</p>
</footer>

</body>
</html>