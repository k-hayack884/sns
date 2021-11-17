<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Confirm | Profile</title>
    </head>
    <body>
        <h1>Confirm</h1>
        <table>
            <tr>
                <th>ユーザー名</th>
                <td><?php echo e($username); ?></td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td><?php echo e($password); ?></td>
            </tr>
            <tr>
                <th>現在地</th>
                <td>（緯度）<?php echo e($latitude); ?>度（経度）<?php echo e($longitude); ?>度</td>
                <?php var_dump($username)?>
            </tr>
        </table>
    </body>
</html>

