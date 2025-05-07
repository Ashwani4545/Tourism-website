<?php
// pages/hotels.php - Best Hotels and Dharamshalas in Varanasi
include '../includes/header.php';
?>

<main class="container mt-5">
    <section class="text-center">
        <h1 class="mb-4">Best Hotels & Dharamshalas in Varanasi</h1>
        <p class="lead">Find the perfect stay in Varanasi with top hotels and dharamshalas.</p>
    </section>
    
    <h2 class="mt-4">Top 25 Hotels in Varanasi</h2>
    <div class="row">
        <?php
        $hotels = [
            ["name" => "BrijRama Palace", "image" => "hotel1.jpg", "details" => "Heritage luxury hotel with river views.", "booking" => "#"],
            ["name" => "Taj Ganges", "image" => "hotel2.jpg", "details" => "5-star hotel with lush gardens.", "booking" => "#"],
            ["name" => "Hotel Surya", "image" => "hotel3.jpg", "details" => "Modern comfort with historic charm.", "booking" => "#"],
            ["name" => "Ramada Plaza", "image" => "hotel4.jpg", "details" => "Luxurious stay with excellent amenities.", "booking" => "#"],
            ["name" => "Hotel Alka", "image" => "hotel5.jpg", "details" => "Budget-friendly hotel with Ganga view.", "booking" => "#"],
            ["name" => "Hotel Temple on Ganges", "image" => "hotel6.jpg", "details" => "Riverside hotel with spiritual vibes.", "booking" => "#"],
            ["name" => "Radisson Hotel", "image" => "hotel7.jpg", "details" => "Premium business and leisure hotel.", "booking" => "#"],
            ["name" => "Costa River Hotel", "image" => "hotel8.jpg", "details" => "Elegant accommodation with modern facilities.", "booking" => "#"],
            ["name" => "Buddha Hotel", "image" => "hotel9.jpg", "details" => "Peaceful and budget-friendly stay.", "booking" => "#"],
            ["name" => "Shiva Ganges View", "image" => "hotel10.jpg", "details" => "Heritage hotel overlooking Ganga.", "booking" => "#"]
        ];
        
        foreach ($hotels as $hotel) {
            echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <img src='../assets/images/" . $hotel['image'] . "' class='card-img-top' alt='" . $hotel['name'] . "'>
                        <div class='card-body'>
                            <h5 class='card-title'>" . $hotel['name'] . "</h5>
                            <p class='card-text'>" . $hotel['details'] . "</p>
                            <a href='" . $hotel['booking'] . "' class='btn btn-primary'>Book Now</a>
                        </div>
                    </div>
                </div>";
        }
        ?>
    </div>

    <h2 class="mt-5">Top 25 Dharamshalas in Varanasi</h2>
    <div class="row">
        <?php
        $dharamshalas = [
            ["name" => "Kashi Vishwanath Dharamshala", "image" => "dharamshala1.jpg", "details" => "Affordable stay near Kashi Vishwanath Temple.", "booking" => "#"],
            ["name" => "Birla Dharamshala", "image" => "dharamshala2.jpg", "details" => "Spiritual stay with all amenities.", "booking" => "#"],
            ["name" => "Annapurna Dharamshala", "image" => "dharamshala3.jpg", "details" => "Comfortable and budget-friendly.", "booking" => "#"],
            ["name" => "Jain Dharamshala", "image" => "dharamshala4.jpg", "details" => "Simple and peaceful stay.", "booking" => "#"],
            ["name" => "Gowardhan Dharamshala", "image" => "dharamshala5.jpg", "details" => "Good location and budget stay.", "booking" => "#"],
            ["name" => "Shri Ram Dharamshala", "image" => "dharamshala6.jpg", "details" => "Well-maintained and comfortable.", "booking" => "#"],
            ["name" => "Shri Krishna Dharamshala", "image" => "dharamshala7.jpg", "details" => "Economical with basic facilities.", "booking" => "#"],
            ["name" => "Santosh Bhavan Dharamshala", "image" => "dharamshala8.jpg", "details" => "Peaceful environment.", "booking" => "#"],
            ["name" => "Manikarnika Ghat Dharamshala", "image" => "dharamshala9.jpg", "details" => "Close to ghats, spiritual ambiance.", "booking" => "#"],
            ["name" => "Maharaja Dharamshala", "image" => "dharamshala10.jpg", "details" => "Heritage feel with modern facilities.", "booking" => "#"]
        ];
        
        foreach ($dharamshalas as $dharamshala) {
            echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <img src='../assets/images/" . $dharamshala['image'] . "' class='card-img-top' alt='" . $dharamshala['name'] . "'>
                        <div class='card-body'>
                            <h5 class='card-title'>" . $dharamshala['name'] . "</h5>
                            <p class='card-text'>" . $dharamshala['details'] . "</p>
                            <a href='" . $dharamshala['booking'] . "' class='btn btn-primary'>Book Now</a>
                        </div>
                    </div>
                </div>";
        }
        ?>
    </div>
</main>

<?php
include '../includes/footer.php';
?>

<?php
    if (!isset($hotel)) $hotel = "Default Value";
    if (!isset($dharamshala)) $dharamshala = "Default Value";
    ?>