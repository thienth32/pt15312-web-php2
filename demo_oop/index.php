<?php

require_once './User.php';

// hiển thị danh sách user trong db
$users = User::all();

?>
<table>
    <thead>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>avatar</th>
        <th><a href="add-new.php">tao moi</a></th>
    </thead>
    <tbody>
        <?php foreach ($users as $u) : ?>
            <tr>
                <td><?= $u->id ?></td>
                <td><?= $u->name ?></td>
                <td><?= $u->email ?></td>
                <td><?= $u->avatar ?></td>
                <td> <a href="remove.php?id=<?= $u->id ?>">xoa</a> </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<?php
