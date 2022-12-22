<?php echo view("includes/header");
echo view("includes/navbar"); ?>
<div class="container">
    <h1>All Student List</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php foreach ($students as $student) { ?>
            <tbody>
                <tr>
                    <td><?= $student['id'] ?></td>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['email'] ?></td>
                    <td><?= $student['address'] ?></td>
                    <td><a href="student/edit/<?= $student['id'] ?>" class="btn btn-warning">Edit</a><a href="student/delete/<?= $student['id'] ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>

        <?php } ?>
    </table>

    <a href="student/new" class="btn btn-primary">New Student</a>
</div>

<?php echo view("includes/footer"); ?>