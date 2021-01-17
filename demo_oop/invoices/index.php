<?php
include_once 'Invoice.php';
$invoice = Invoice::all();
?>
<table>
    <thead>
        <th>id</th>
        <th>name</th>
        <th>phone number</th>
        <th>email</th>
        <th><a href="add-new.php">tao moi</a></th>
    </thead>
    <tbody>
        <?php foreach ($invoice as $i) : ?>
            <tr>
                <td><?= $i->id ?></td>
                <td><?= $i->customer_name ?></td>
                <td><?= $i->customer_phone_number ?></td>
                <td><?= $i->customer_email ?></td>
                <td> <a href="remove.php?id=<?= $i->id ?>">xoa</a> </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<?php
?>