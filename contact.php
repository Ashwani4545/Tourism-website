<?php
include 'includes/header.php';
?>

<main class="contact-section">
    <div class="container mt-5">
        <section class="text-center">
            <h1 class="mb-4" data-translate="contact_title">Contact Us</h1>
            <p class="lead" data-translate="contact_subtitle">Have questions? Get in touch with us!</p>
        </section>
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4 shadow">
                    <form action="contact_process.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'includes/footer.php';
?>
