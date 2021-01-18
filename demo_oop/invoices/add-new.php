<?php
?>
<form action="save-new.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">phone number</label>
        <input type="number" name="phone">
    </div>
    <div>
        <label for="">Email</label>
        <input type="text" name="email">
    </div>
    <div>
        <label for="">address</label>
        <input type="text" name="address">
    </div>
    <div>
        <label for="">price</label>
        <input type="number" name="price">
    </div>
    <div>
        <label for="">image</label>
        <input type="file" name="file">
    </div>
    <div>
        <button type="submit">Tạo mới</button>
    </div>
</form>