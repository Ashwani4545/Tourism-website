<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr" id="htmlRoot">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Website</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">  <!-- Link to style.css -->
    <script src="assets/js/script.js" defer></script>
</head>

<body>
<!-- Hero Section with Animation -->
<section class="hero fade-in">
    <div class="hero-content slide-up">
    <h1 data-translate="hero_title">!!HAR HAR MAHADEV!!</h1>
    <p data-translate="hero_subtitle">Explore the Beauty of KASHI</p>
        <p data-translate="hero_subtitle">Discover amazing places, attractions, and experiences.</p>
        <button class="btn btn-animated">Start Your Kashi Journey</button>
    </div>
</section>

<!-- Features Section with Hover Effects -->
<section class="features">
    <div class="feature slide-up">
        <h3>Attractions</h3>
        <p>Visit the sacred temples and experience the peace of the ghats of Kashi.</p>
        <a href="attractions.php" class="btn btn-primary btn-hover">Explore Attractions</a>
    </div>
    <div class="feature slide-up">
        <h3>Museums and Forts</h3>
        <p>Explore the rich history and culture of Kashi.</p>
        <a href="museums.php" class="btn btn-primary btn-hover">Discover More</a>
    </div>
    <div class="feature slide-up">
        <h3>Stays & Rest Places</h3>
        <p>Book a comfortable stay, meditate, or experience local hospitality.</p>
        <a href="services.php" class="btn btn-primary btn-hover">Find a Stay</a>
    </div>
    <div class="feature slide-up">
        <h3>Services</h3>
        <p>Book a cab, reserve a ferry, and plan a guided tour with ease.</p>
        <a href="services.php" class="btn btn-primary btn-hover">View Services</a>
    </div>
</section>

<!-- Testimonials with Fade-in Effect -->
<section class="testimonials fade-in">
    <h2>Real Stories, Real Results</h2>
    <div class="testimonial slide-up">
        <p>"Tourism chatbot completely transformed my journey!" - <strong>Trisha P.</strong></p>
    </div>
    <div class="testimonial slide-up">
        <p>"I loved my journey to this city!" - <strong>Aarav A.</strong></p>
    </div>
</section>

<!-- Newsletter with Animation -->
<section class="newsletter fade-in">
    <h2>Stay Updated with KashiChatbot</h2>
    <p>Subscribe to get personalized updates about travel and culture.</p>
    <form action="subscribe.php" method="post" class="slide-up">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit" class="btn btn-animated">Subscribe</button>
    </form>
</section>

<!-- Support Section with Image Overlay -->
<section class="support-section fade-in">
    <div class="support-container slide-up">
        <div class="text-content">
            <h2>You're Not Alone</h2>
            <p><strong>In India</strong>, "1 in 3 visitors seek a deeper spiritual and cultural experience." With our Varanasi Tourism platform, join a community exploring the city's rich heritage, sacred sites, and local traditions to make meaningful connections and unforgettable memories.</p>
        </div>
        <div class="image-content">
            <div class="overlay-text slide-up">
                Explore the timeless beauty of Varanasi where history, culture, and spirituality meet.
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>
</body>
</html>