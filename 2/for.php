<?php
include "functions.php";
$users = get_users();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php /*for ( $i =0 ; $i<10 ; $i++):*/ ?><!--
<p><?php /*echo $i; */ ?></p>

       --><?php /*endfor; */ ?>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>action</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td>
                <a href="#">delet</a>
                <a href="#">edit</a>
                <a href="#">approv</a>
            </td>

        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>