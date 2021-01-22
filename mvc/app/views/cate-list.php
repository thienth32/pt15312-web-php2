<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Hiển thị menu</th>
        <th>
            <a href="new-cate">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach ($cates as $c): ?>
            <tr>
                <td><?= $c->id ?></td>
                <td><?= $c->cate_name ?></td>
                <td><?= $c->desc ?></td>
                <td><?= $c->show_menu == 1 ? "Có" : "Không" ?></td>
                <td>
                    <a href="edit-cate?id=<?= $c->id ?>">Sửa</a>
                    <a href="remove-cate?id=<?= $c->id ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach?>
    </tbody>
</body>
</html>