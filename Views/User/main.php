<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<div><a class="btn btn-success mt-5" href="?controller=<?= $controller ?>&action=create">+ Add User</a></div>
<h1 align = "center" > Danh sach thanh vien </h1>
    <table class="table table-dark table-striped">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">User Name</th>
            <th scope="col">Full Name</th>
            <th scope="col" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $stt = 1;
                    foreach($record as $item) {
                ?>
            </tr>
            <tr>
                <th scope="row"><?= $stt ?></th>
                <td><?= $item['username'] ?></td>
                <td><?= $item['fullname'] ?></td>
                <td><a href="?controller=<?= $controller ?>&action=edit&id=<?= $item['id'] ?>" class="btn btn-info mr-2">Edit</a></td>
                <td><a href="?controller=<?= $controller ?>&action=del&id=<?= $item['id'] ?>" class="btn btn-danger mr-2">Delete</a></td>

            </tr>
            <?php
                $stt++;
                    }
            ?>
        </tbody>
        </table>
    </table>
</html>