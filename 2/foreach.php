<?php
include "functions.php";
$users = get_users();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table style="border: 1px solid #ddd;">
    <?php if($users && count($users) > 0): ?>
        <tr>
            <th>firstname</th>
            <th>lastname</th>
            <th>actions</th>
        </tr>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['firstname'] ?></td>
                <td><?php echo $user['lastname'] ?></td>
                <td>
                    <a href="#">delete</a>
                    <a href="#">edit</a>
                    <a href="#">approve</a>
                </td>

            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">
                <span>هیچ اطلاعاتی یافت نشد.</span>
            </td>
        </tr>
    <?php endif; ?>
</table>

</body>
</html>