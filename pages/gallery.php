<?php
// pages/emergency.php - Page for emergency services
include '../includes/header.php';
?>

<main class="container mt-5">
    <section class="text-center">
        <h1 class="mb-4">Emergency Services</h1>
        <p class="lead">Find essential services for any emergency situation.</p>
    </section>
    
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-danger">
                <div class="card-body">
                    <h5 class="card-title text-danger">Police</h5>
                    <p class="card-text">Contact the local police department for safety and security.</p>
                    <a href="tel:100" class="btn btn-danger">Call 100</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-warning">
                <div class="card-body">
                    <h5 class="card-title text-warning">Fire Department</h5>
                    <p class="card-text">Reach out to firefighters in case of a fire emergency.</p>
                    <a href="tel:101" class="btn btn-warning">Call 101</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-success">
                <div class="card-body">
                    <h5 class="card-title text-success">Ambulance</h5>
                    <p class="card-text">Get immediate medical assistance with an ambulance service.</p>
                    <a href="tel:102" class="btn btn-success">Call 102</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include '../includes/footer.php';
?>