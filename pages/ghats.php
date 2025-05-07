<?php
// pages/ghats.php - Page for Varanasi Ghats
include '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Varanasi Tourism</title>

    <!-- ✅ Bootstrap CSS (Make sure this is present) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- ✅ Custom CSS (Optional) -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>


<main class="container mt-5">
    <section class="text-center">
        <h1 class="mb-4">Explore Varanasi Ghats</h1>
        <p class="lead">Experience the spiritual and scenic beauty of the famous ghats of Varanasi.</p>
        <input type="text" id="searchGhat" class="form-control my-3" placeholder="Search Ghats...">
    </section>
    
    <div class="row" id="ghatList">
        <?php 
        $ghats = [
            ["name" => "Dashashwamedh Ghat", "desc" => "One of the oldest and most spectacular ghats, famous for the Ganga Aarti."],
            ["name" => "Manikarnika Ghat", "desc" => "A sacred ghat known as a major cremation site in Hindu tradition."],
            ["name" => "Assi Ghat", "desc" => "A peaceful ghat where the Ganges meets the Assi River, popular among pilgrims and tourists."],
            ["name" => "Panchganga Ghat", "desc" => "Believed to be the confluence of five holy rivers, a significant site for rituals."],
            ["name" => "Harishchandra Ghat", "desc" => "Another cremation ghat, associated with the legendary King Harishchandra."],
            ["name" => "Kedar Ghat", "desc" => "A spiritually rich ghat with a famous Shiva temple, known for its religious significance."],
            ["name" => "Manmandir Ghat", "desc" => "Built by Maharaja Man Singh, featuring an ancient observatory."],
            ["name" => "Scindia Ghat", "desc" => "Partially submerged temple and one of the most picturesque ghats of Varanasi."],
            ["name" => "Bhonsale Ghat", "desc" => "Built by the Maratha rulers, known for its massive structure and temples."],
            ["name" => "Darbhanga Ghat", "desc" => "Famous for its royal palace and stunning architecture along the river."],
            // Additional 30 Ghats
            ["name" => "Adi Keshav Ghat", "desc" => "Sacred for Vishnu devotees, located at the Ganges' confluence."],
            ["name" => "Ahilyabai Ghat", "desc" => "Built by Queen Ahilyabai Holkar, famous for its architectural beauty."],
            ["name" => "Bajirao Ghat", "desc" => "Constructed by the Peshwas of Maharashtra, has historical significance."],
            ["name" => "Bhadaini Ghat", "desc" => "Known for the large water pumping station."],
            ["name" => "Bachraj Ghat", "desc" => "Important for Jain pilgrims, with several Jain temples nearby."],
            ["name" => "Chet Singh Ghat", "desc" => "Site of a historical battle between the British and Raja Chet Singh."],
            ["name" => "Chousatti Ghat", "desc" => "Named after the 64 Yoginis (goddesses), important in Tantric worship."],
            ["name" => "Dandi Ghat", "desc" => "Used by ascetic groups and spiritual seekers."],
            ["name" => "Durga Ghat", "desc" => "Associated with the famous Durga Kund temple."],
            ["name" => "Ganesh Ghat", "desc" => "Named after Lord Ganesha, a site for religious ceremonies."],
            ["name" => "Ganga Mahal Ghat", "desc" => "A historic site with a palace built by a Maharaja."],
            ["name" => "Gau Ghat", "desc" => "Named after the holy cow (Gau) and used for religious rituals."],
            ["name" => "Gola Ghat", "desc" => "A less crowded, peaceful ghat near the main ones."],
            ["name" => "Hanuman Ghat", "desc" => "Said to be established by Tulsidas, associated with Lord Hanuman."],
            ["name" => "Jain Ghat", "desc" => "Sacred for Jain devotees, has ancient temples."],
            ["name" => "Janaki Ghat", "desc" => "Named after Goddess Sita (Janaki), holds cultural significance."],
            ["name" => "Kshameshwar Ghat", "desc" => "Known for its peaceful ambiance."],
            ["name" => "Lalita Ghat", "desc" => "Features the famous Nepalese Temple (Pashupatinath-style)."],
            ["name" => "Mata Anandamai Ghat", "desc" => "Named after a famous female saint."],
            ["name" => "Mehta Ghat", "desc" => "Used for religious and cultural functions."],
            ["name" => "Nishadraj Ghat", "desc" => "Associated with Nishadraj, a boatman in Ramayana."],
            ["name" => "Pandey Ghat", "desc" => "Known for its association with scholars and saints."],
            ["name" => "Prabhu Ghat", "desc" => "Less crowded, offers beautiful sunrise views."],
            ["name" => "Rana Mahal Ghat", "desc" => "Built by the rulers of Rajasthan."],
            ["name" => "Raja Ghat", "desc" => "An ancient and sacred site used for rituals."],
            ["name" => "Shivala Ghat", "desc" => "Has old palaces and Shiva temples."],
            ["name" => "Someshwar Ghat", "desc" => "Known for the Someshwar Mahadev temple."],
            ["name" => "Telianala Ghat", "desc" => "Less known, used for daily rituals."],
            ["name" => "Vijayanagaram Ghat", "desc" => "Named after the Vijayanagara rulers."],
        ];
        
        foreach ($ghats as $ghat) {
            echo "<div class='col-md-4 mb-4 ghat-card'>
                    <div class='card shadow'>
                        <img src='../assets/images/ghats.jpg' class='card-img-top' alt='{$ghat['name']}'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$ghat['name']}</h5>
                            <p class='card-text'>{$ghat['desc']}</p>
                            <a href='#' class='btn btn-primary'>Learn More</a>
                        </div>
                    </div>
                </div>";
        }
        ?>
    </div>
</main>

<!-- Footer -->
<footer class="text-center mt-5">
    <p>&copy; 2025 Varanasi Tourism. All Rights Reserved.</p>
</footer>

<script>
    // Search Functionality
    document.getElementById("searchGhat").addEventListener("keyup", function() {
        let filter = this.value.toLowerCase();
        let cards = document.querySelectorAll(".ghat-card");
        cards.forEach(card => {
            let name = card.querySelector(".card-title").innerText.toLowerCase();
            card.style.display = name.includes(filter) ? "block" : "none";
        });
    });
</script>
<?php
if (!isset($ghat)) $ghat = "Default Value";
?>
