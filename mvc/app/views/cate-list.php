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
        <th>Name</th>
        <th>Detail</th>
    </thead>
    <tbody>
        <?php foreach ($cates as $c): ?>
            <tr>
                <td><?= $c->id ?></td>
                <td><?= $c->cate_name ?></td>
                <td><?= $c->desc ?></td>
            </tr>
        <?php endforeach?>
    </tbody>
</body>
</html>