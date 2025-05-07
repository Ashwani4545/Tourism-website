<?php
$parks = [
    [
        "name" => "Ravidas Park",
        "address" => "Nagwa Rd, near Girls Primary School, Nagwa, Varanasi, Uttar Pradesh 221005",
        "timing" => "8 am–9 pm",
        "rating" => "4.1"
    ],
    [
        "name" => "Nehru Park",
        "address" => "8XMG+VRH, Kennedy Rd, Varanasi cantonment, Varanasi, Uttar Pradesh 221002",
        "timing" => "5–9 am, 3–9 pm",
        "rating" => "4.0"
    ],
    [
        "name" => "Anand Park",
        "address" => "Bankati Hanuman Road, near Vankatti Hanumanji Mandir, Durgakund, Varanasi, Uttar Pradesh 221010",
        "timing" => "4 am–10 pm",
        "rating" => "4.1"
    ],
    [
        "name" => "Sarnath Deer Park",
        "address" => "92JG+RJ9, Sarnath, Varanasi, Uttar Pradesh 221007",
        "timing" => "10 am–5 pm",
        "rating" => "4.1"
    ],
    [
        "name" => "Chaukhandi Stupa, Sarnath",
        "address" => "92FF+JC4, Rishpattan Rd, Near, Sarnath, Varanasi, Uttar Pradesh 221007",
        "timing" => "6 am–6 pm",
        "rating" => "4.1"
    ],
    [
        "name" => "Company Garden",
        "address" => "8297+V89, Maidagin Xing, Daranagar, Kotwali, Varanasi, Uttar Pradesh 221001",
        "timing" => "5–10 am, 4–10 pm",
        "rating" => "4.0"
    ],
    [
        "name" => "Shri Nagar Park",
        "address" => "8X5W+M6Q, Sonia Rd, near Ramkund talab, Shri Nagar Colony, Sidhgiribagh, Varanasi, Uttar Pradesh 221010",
        "timing" => "4 am–11 pm",
        "rating" => "4.1"
    ],
    [
        "name" => "Shaheed Udyan",
        "address" => "8X7P+3QJ, Chhittupura, Sigra, Varanasi, Uttar Pradesh 221010",
        "timing" => "4 am–9 pm",
        "rating" => "4.2"
    ],
    [
        "name" => "Nagar Nigam Park",
        "address" => "D59/235-3-u, Lane Number 5, Nirala Nagar, Jai Prakash Nagar, Shivpurwa, Varanasi, Uttar Pradesh 221010",
        "timing" => "Open 24 hours",
        "rating" => "3.5"
    ],
    [
        "name" => "Machodari Park",
        "address" => "8XMG+VRH, Kennedy Rd, Varanasi cantonment, Varanasi, Uttar Pradesh 221002",
        "timing" => "Open 24 hours",
        "rating" => "3.5"
    ],
    [
        "name" => "Shivala Park",
        "address" => "72W4+9R5, Ghats of Varanasi, Shivala, Varanasi, Uttar Pradesh 221001",
        "timing" => "Open 24 hours",
        "rating" => "4.4"
    ],
    [
        "name" => "Rose Garden",
        "address" => "Sarkaripura, Manduwadih, Varanasi, Uttar Pradesh 221103",
        "timing" => "7 am–7 pm",
        "rating" => "5"
    ],
    [
        "name" => "Saraswati Garden",
        "address" => "7XGV+XG4, Banaras Hindu University, Varanasi, Uttar Pradesh 221005",
        "timing" => "Open 24 hours",
        "rating" => "4.4"
    ],
    [
        "name" => "Gandhi Park",
        "address" => "Nirala Nagar, Chhittupura, Shivpurwa, Varanasi, Uttar Pradesh 221010",
        "timing" => "Open 24 hours",
        "rating" => "3.6"
    ],
    [
        "name" => "Rajnarayan Smarak Park",
        "address" => "8273+PJ3, Lahurabir Rd, Benia Bagh, Varanasi, Uttar Pradesh 221001",
        "timing" => "4 am–10 pm",
        "rating" => "4.1"
    ],
    [
        "name" => "Hari Nagar Park",
        "address" => "Ghanti Mill Road, Hari Nagar Colony, Shivpurwa, Varanasi – 221002",
        "timing" => "8am – 9pm",
        "rating" => "3.8"
    ],
    [
        "name" => "Rajarshi Garden",
        "address" => "9X3F+H63, Laxmanpur, Narayanpur, Varanasi, Uttar Pradesh 221003",
        "timing" => "5 am–8 pm",
        "rating" => "4.3"
    ],
];
?>

<?php include("../includes/header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Famous Parks in Varanasi</title>

    <!-- ✅ Bootstrap CSS (Make sure this is present) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    
    <!-- ✅ Custom CSS (Optional) -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
    <script>
        function filterParks() {
            let input = document.getElementById("search").value.toLowerCase();
            let parkCards = document.getElementsByClassName("park-card");
            
            for (let i = 0; i < parkCards.length; i++) {
                let parkName = parkCards[i].getElementsByTagName("h2")[0].innerText.toLowerCase();
                if (parkName.includes(input)) {
                    parkCards[i].style.display = "block";
                } else {
                    parkCards[i].style.display = "none";
                }
            }
        }
    </script>
</head>
<body>
    <h1>Varanasi Parks</h1>
    <input type="text" id="search" class="search-box" onkeyup="filterParks()" placeholder="Search parks...">
    
    <div class="park-container">
        <?php foreach ($parks as $park) { ?>
            <div class="park-card">
                <h2><?php echo $park["name"]; ?></h2>
                <p><strong>Address:</strong> <?php echo $park["address"]; ?></p>
                <p><strong>Timing:</strong> <?php echo $park["timing"]; ?></p>
                <p><strong>Rating:</strong> <?php echo $park["rating"]; ?> ⭐</p>
            </div>
        <?php } ?>
    </div>
</body>
</html>
