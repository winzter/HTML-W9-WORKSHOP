<?php include 'connect.php'?>
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
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
        if(!empty($_GET['username'])){
            $value = '%'.$_GET['username'].'%';
            $stmt->bindParam(1,$value);
            $stmt->execute();
            $row = $stmt->fetch();
        }?>
        <div>
            <img src="member_photo/<?=$row['username']?>.jpg" alt=<?=$row['username']?>><br>
            ชื่อสมาชิก: <?=$row['name']?><br>
            ที่อยู่: <?=$row['address']?><br>
            อีเมล์: <?=$row['email']?>
        </div>
</body>
</html>