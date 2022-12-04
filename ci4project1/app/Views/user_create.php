<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .navbar {
            background-color: black;
            color: white;
            padding: 5px
        }

        .navbar a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="/users">All Users</a> |
        <a href="/users/add">New User</a>
    </div>
    <h1>User Entry Form</h1>
    <form action="<?= site_url('/users/submit') ?>" method="post">
        <label for="">Name:</label>
        <input type="text" name="name" id="">
        <?php if ($validation->geError('name')) : ?>
            <p><?= $error = $validation->geError('name') ?></p>
        <?php endif; ?>
        <label for="">Email:</label>
        <input type="email" name="email" id="">
        <input type="submit" name="submit" value="Submit">
    </form>


</body>

</html>