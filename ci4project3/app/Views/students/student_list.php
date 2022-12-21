<?php echo view("includes/header");
echo view("includes/navbar"); ?>
<div class="container">
    <h1>All Student List</h1>
    <?php foreach ($students as $student) {
        echo $student['name'] . "<br>";
    } ?>
</div>

<?php echo view("includes/footer"); ?>