<?php include("../includes/header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Famous Temples in Varanasi</title>

    <!-- ✅ Bootstrap CSS (Make sure this is present) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    
    <!-- ✅ Custom CSS (Optional) -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<main class="container mt-5">
    <section class="text-center">
        <h1 class="mb-4">Famous Temples in Varanasi</h1>
        <p class="lead">Explore the divine spiritual sites of Kashi</p>
        <input type="text" id="searchTemple" class="form-control my-3" placeholder="Search Temples...">
    </section>
    
    <div class="row" id="templeList">
        <?php 
        $temples = [
            ["name" => "Kashi Vishwanath Temple", "image" => "../assets/images/kashi_vishwanath.jpg", "description" => "One of the most famous temples dedicated to Lord Shiva, located in the heart of Varanasi."],
            ["name" => "Sankat Mochan Hanuman Temple", "image" => "../assets/images/sankat-mochanji.jpg", "description" => "A sacred temple dedicated to Lord Hanuman, known for its peaceful surroundings."],
            ["name" => "Durga Temple", "image" => "../assets/images/durga_temple.jfif", "description" => "Also known as the 'Monkey Temple', dedicated to Goddess Durga."],
            ["name" => "Annapurna Devi Mandir", "image" => "../assets/images/annapuna-temple.jpg", "description" => "A temple dedicated to Goddess Annapurna, the goddess of food and nourishment."],
            ["name" => "Kal Bhairav Temple", "image" => "../assets/images/kaal-bhairav.jpg", "description" => "A significant temple dedicated to Kal Bhairav, the fierce form of Lord Shiva."],
            ["name" => "Tulsi Manas Temple", "image" => "../assets/images/tulsi-manas.jpg", "description" => "This temple is dedicated to Lord Rama and is associated with poet Tulsidas."],
            ["name" => "New Vishwanath Temple", "image" => "../assets/images/new_vishwanath.jpg", "description" => "Located in BHU, this temple is a replica of Kashi Vishwanath Temple."],
            ["name" => "Bharat Mata Temple", "image" => "../assets/images/bharat-mata.jpg", "description" => "A unique temple dedicated to Mother India, featuring a marble relief map of India."],
            ["name" => "Vishalakshi Temple", "image" => "../assets/images/vishalakshi_temple.jpeg", "description" => "One of the 51 Shakti Peethas, dedicated to Goddess Vishalakshi, a form of Goddess Parvati."],
            ["name" => "Shri Tilbhandeshwar Mahadev Mandir", "image" => "../assets/images/Shri_Tilbhandeshwar_Mahadev_Mandir.jpeg", "description" => "An ancient Shiva temple known for its self-manifested (Swayambhu) Shivling."],
            ["name" => "Mahamrityunjay Mahadev Temple", "image" => "../assets/images/mrityunjay_mahadev.jpg", "description" => "A temple known for its healing and protective powers, dedicated to Lord Shiva."],
            ["name" => "Markandey Mahadev Temple", "image" => "../assets/images/Markandey-Mahadev-Temple.png", "description" => "A revered Shiva temple associated with the legend of Sage Markandeya."],
            ["name" => "Lalita Gauri Temple", "image" => "../assets/images/Lalita-Gouri-Temple.webp", "description" => "A temple dedicated to Goddess Lalita Gauri, located near Manikarnika Ghat."],
            ["name" => "Kritivaseshwar Temple", "image" => "../assets/images/krittivaseshwar-mahadev.webp", "description" => "A lesser-known yet significant temple of Lord Shiva in Varanasi."],
            ["name" => "Jagadguru Shankaracharya Math", "image" => "../assets/images/jagadguru_temple.jpg", "description" => "A temple and math dedicated to Adi Shankaracharya and his teachings."],
            ["name" => "Adi Keshav Temple", "image" => "../assets/images/adi_keshav_temple.jpeg", "description" => "Located at Raj Ghat, this temple is dedicated to Lord Vishnu and marks his arrival in Kashi."],
            ["name" => "Bindu Madhav Temple", "image" => "../assets/images/bindu_madhav_temple.jpeg", "description" => "One of the five sacred Madhava temples in India, dedicated to Lord Vishnu."],
            ["name" => "Kedareshwar Temple", "image" => "../assets/images/kedareshwar_temple.webp", "description" => "Located near the Ganges, this Shiva temple is revered for its South Indian architectural influence."],
            ["name" => "Ratneshwar Mahadev Temple", "image" => "../assets/images/ratneshwar_temple.jpg", "description" => "A unique leaning Shiva temple at Manikarnika Ghat, partially submerged in the Ganges."],
            ["name" => "Dandpani Temple", "image" => "../assets/images/dandapani_temple.jpg", "description" => "A temple dedicated to Lord Dandapani, a fierce form of Lord Kartikeya, near Scindia Ghat."],
        ];
    
        foreach ($temples as $temple) {
            echo '<div class="col-lg-3 col-md-4 col-sm-6 col-12 temple-card">'; // 4 per row on large screens
            echo '<div class="card">';
            echo '<img src="'.$temple["image"].'" class="card-img-top">';
            echo '<div class="card-body">';
            echo '<h2 class="card-title">'.$temple["name"].'</h2>';
            echo '<p class="card-text">'.$temple["description"].'</p>';
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
document.getElementById("searchTemple").addEventListener("keyup", function() {
    let filter = this.value.toLowerCase();
    let cards = document.querySelectorAll(".temple-card");
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
