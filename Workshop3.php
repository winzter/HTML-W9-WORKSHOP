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
        $pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();

        while($row = $stmt->fetch()){?>
            <div>
                ชื่อสมาชิก: <?=$row['name']?><br>
                ที่อยู่: <?=$row['address']?><br>
                อีเมล์: <?=$row['email']?><br>
                <img src="member_photo/<?=$row['username']?>.jpg" width="100" height="100">
                <hr>
            </div>
        <?php } ?>
    
</body>
</html>