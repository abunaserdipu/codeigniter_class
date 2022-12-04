<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .box {
        border: 1px solid;
        border-radius: 3px;
        background-color: lightcyan;
        padding: 10px;
        width: 350px;
        height: 200px;
    }

    .box input {
        display: block;
        border: none;
        padding: 3px;
        width: 200px;
        margin: 5px 0;
        justify-content: center;
    }
</style>

<body>
    <h1>Edit User</h1>
    <div class="box">
        <form action="<?php echo site_url('/users/update') ?>" method="post">
            <input type="hidden" name="u_id" value="<?= $user['id'] ?>">
            <label for="">Name:</label>
            <input type="text" name="u_name" value="<?= $user['name'] ?>">
            <label for="">Email:</label>
            <input type="email" name="u_email" value="<?= $user['email'] ?>">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>

</html>