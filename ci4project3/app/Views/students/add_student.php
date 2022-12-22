<?php echo view("includes/header");
echo view("includes/navbar"); ?>

<div class="container">
    <div class="card mt-3">
        <div class="card-header bg-info">
            <h1>Student Entry</h1>
        </div>

        <form action="/student/create" method="post" class="p-3">
            <!-- csrf= cross site request forgery -->
            <?= csrf_field(); ?>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="address" class="form-label">Address:</label>
                <textarea name="address" class="form-control" id="address" cols="30" rows="5" placeholder="Enter address"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php echo view("includes/footer"); ?>