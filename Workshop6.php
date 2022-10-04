<?php include'connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function confirmDelete(username){
            console.log("Deleted");
            let ans = confirm("ต้องการลบชื่อผู้ใช้งาน " + username);
            if(ans == true){
                document.location = "Workshop6_delete.php?username=" + username;
            }
        }
    </script>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();

        while($row = $stmt->fetch()){
    ?>
            ชื่อสมาชิก: <?=$row['name']?><br>
            ที่อยู่: <?=$row['address']?><br>
            อีเมล์: <?=$row['email']?><br>
            <img src="member_photo/<?=$row['username']?>.jpg" alt=<?=$row['username']?> width="100"><br>
            <a href="#" onclick="confirmDelete('<?=$row['username']?>')">ลบ</a><br>
            <hr>
        <?php } ?>
</body>
</html>