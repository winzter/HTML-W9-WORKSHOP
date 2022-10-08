<?php include'connect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="Workshop8_add.php" method="post">
            <label for="username">ชื่อผู้ใช้: </label>
            <input type="text" name="username"  required><br>

            <label for="password">รหัสผ่าน: </label>
            <input type="password" name="password" required><br>

            <label for="name">ชื่อ-นามสกุล: </label>
            <input type="text" name="name" required><br>

            <label for="address">ที่อยู่: </label><br>
            <textarea name="address" cols="30" rows="10"></textarea><br>

            <label for="mobile">เบอร์โทรศัพท์: </label>
            <input type="text" name="mobile" pattern="\d{2}-\d{4}-\d{4}"><br>

            <label for="email">อีเมล์: </label>
            <input type="email" name="email"><br>

            <input type="submit">
        </form>
    </div>
</body>
</html>