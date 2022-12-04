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

        table,
        tr,
        th,
        td {
            border: 1px solid;
            border-collapse: collapse;
            padding: 10px;
        }


        tr:hover {
            background-color: lightgray;
        }

        table {
            width: 50%;
        }

        .action a {
            border: 1px solid;
            padding: 5px;
            text-decoration: none;
            margin: 0 2px;
        }

        .edit {
            background-color: yellowgreen;
        }

        .delete {
            background-color: red;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="/users">All Users</a> |
        <a href="/users/add">New User</a>
    </div>
    <h1>Users List</h1>
    <?php //print_r($myusers) 
    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($myusers as $user) { ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td class="action">
                        <a class="edit" href="<?php echo base_url('users/edit/' . $user['id']) ?>">Edit</a>
                        <a class="delete" href="<?php echo base_url('users/delete/' . $user["id"]) ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>