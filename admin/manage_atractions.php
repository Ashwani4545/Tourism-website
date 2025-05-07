<?php
// admin/manage_attractions.php - Manage Attractions Page
include '../includes/header.php';
?>

<main class="container mt-5">
    <section class="text-center">
        <h1 class="mb-4">Manage Attractions</h1>
        <p class="lead">Add, edit, or delete tourist attractions.</p>
    </section>
    
    <div class="text-end mb-3">
        <a href="add_attraction.php" class="btn btn-success">Add New Attraction</a>
    </div>
    
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Famous Temple</td>
                <td>City Center</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</main>

<?php
include '../includes/footer.php';
?>
