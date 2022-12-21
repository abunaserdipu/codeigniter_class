<?php echo view("includes/header");
echo view("includes/navbar"); ?>
<div class="container">
    <h1>All Student List</h1>
    <table style="width:50%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <?php foreach ($students as $student) { ?>
            <tbody>
                <tr>
                    <td><?= $student['id'] ?></td>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['email'] ?></td>
                    <td><?= $student['address'] ?></td>
                </tr>
            </tbody>

        <?php } ?>
    </table>
</div>

<?php echo view("includes/footer"); ?>