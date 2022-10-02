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
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();?>

        <div style="display: flex;">
        <?php while($row = $stmt->fetch()){ ?>
            <div style="padding: 15px; text-align:center;">
                <a href="Workshop5_detail.php?username=<?=$row['username']?>"><img src="member_photo/<?=$row['username']?>.jpg" alt=<?=$row['username']?> width="200"></a><br>
                <?=$row['name']?>
            </div>
        <?php }?>
        </div>
</body>
</html>