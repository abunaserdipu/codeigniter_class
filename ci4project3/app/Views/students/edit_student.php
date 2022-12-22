<?php echo view("includes/header");
echo view("includes/navbar"); ?>

<div class="container">
    <div class="card mt-3">
        <div class="card-header bg-info">
            <h1>Student Entry</h1>
        </div>

        <form action="/student/update/<?= $student['id'] ?>" method="post" class="p-3">

            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" value="<?= $student['name'] ?>" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" class="form-control" id="phone" value="<?= $student['phone'] ?>" name="phone">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" value="<?= $student['email'] ?>" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="address" class="form-label">Address:</label>
                <textarea name="address" class="form-control" id="address" cols="30" rows="5"><?= $student['address'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<?php echo view("includes/footer"); ?>