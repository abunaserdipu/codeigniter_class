<?php echo view('includes/header');
echo view('includes/navbar'); ?>
<div class="container">

    <h1>Contact Us</h1>
    <form action="">
        <input type="text" name="name" id="" placeholder="Enter your name"><br>
        <input type="email" name="email" id="" placeholder="Enter your email"><br>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Enter your message"></textarea><br>
        <input type="submit" name="submit" value="Send">
    </form>
</div>
<?php echo view('includes/footer'); ?>