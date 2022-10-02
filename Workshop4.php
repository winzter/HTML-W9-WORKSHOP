<?php include"connect.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="keyword">
        <input type="submit" value="ค้นหา">
    </form>
    <div style="display: flex;">
        <?php
            $stmt = $pdo->prepare("SELECT * from member WHERE name LIKE ?");
            if(!empty($_GET['keyword'])){
                $value = '%'.$_GET["keyword"].'%';
                $stmt->bindParam(1,$value);
                $stmt->execute();
            }
        ?>
        <?php 
            while($row = $stmt->fetch()){?>
                <div style="margin: 0 auto; padding-top:50px;">
                    <img src="member_photo/<?=$row['username']?>.jpg" alt=<?=$row['username']?>><br>
                    ชื่อสมาชิก: <?=$row['name']?><br>
                    ที่อยู่: <?=$row['address']?><br>
                    อีเมล: <?=$row['email']?>
                </div>
        <?php } ?>
    </div>
</body>
</html>