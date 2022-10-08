<?php include'connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();

        while($row = $stmt->fetch()){?>
            ชื่อผู้ใช้งาน: <?=$row['username']?><br>
            ชื่อสมาชิก: <?=$row['name']?><br>
            ที่อยู่: <?=$row['address']?><br>
            เบอร์โทร: <?=$row['mobile']?><br>
            อีเมล์: <?=$row['email']?><br>
            <a href="Workshop9_insert.php?username=<?=$row['username']?>">แก้ไข</a><br>
            <hr>
        <?php } ?>

</body>
</html>