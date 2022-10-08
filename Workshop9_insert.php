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
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");

        if(!empty($_GET['username'])){

            $stmt->bindParam(1,$_GET['username']);
            $stmt->execute();
            $row = $stmt->fetch();?>

            <form action="Workshop9_update.php" method="post">

                <input type="hidden" name="username" value=<?=$row['username']?>>

                <label for="name">ชื่อสมาชิก: </label><br>
                <input type="text" name="name" value="<?=$row['name']?>" ><br>
                
                <label for="address">ที่อยู่: </label><br>
                <textarea name="address" cols="30" rows="10"><?=$row['address']?></textarea><br>

                <label for="mobile">เบอร์ติดต่อ: </label><br>
                <input type="text" name="mobile" pattern="\d{2}-\d{4}-\d{4}" value="<?=$row['mobile']?>"><br>

                <label for="email">อีเมล์: </label><br>
                <input type="email" name="email" value="<?=$row['email']?>"><br><br>
                <input type="submit" value="แก้ไขข้อมูล">

            </form>
        <?php } ?>
    
</body>
</html>