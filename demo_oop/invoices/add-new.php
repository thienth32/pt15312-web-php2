<?php
?>
<form action="save-new.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="">Name</label>
        <input type="text" name="customer_name">
    </div>
    <div>
        <label for="">phone number</label>
        <input type="number" name="customer_phone_number">
    </div>
    <div>
        <label for="">Email</label>
        <input type="text" name="customer_email">
    </div>
    <div>
        <label for="">address</label>
        <input type="text" name="customer_address">
    </div>
    <div>
        <label for="">price</label>
        <input type="number" name="total_price">
    </div>
    <div>
        <label for="">image</label>
        <input type="file" name="file">
    </div>
    <div>
        <button type="submit">Tạo mới</button>
    </div>
</form>