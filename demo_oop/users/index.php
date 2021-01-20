<?php

require_once '../User.php';
require_once '../utils.php';
// hiển thị danh sách user trong db
$users = User::all();
?>

<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Avatar</th>
        <th>
            <a href="add-new.php">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach ($users as $u): ?>
            <tr>
                <td><?= $u->id ?></td>
                <td><?= $u->name ?></td>
                <td><?= $u->email ?></td>
                <td>
                    <img src="<?= BASE_URL . $u->avatar ?>" width="70">
                </td>
                <td>
                    <a href="remove.php?id=<?= $u->id ?>">Xóa</a>
                    
                </td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>