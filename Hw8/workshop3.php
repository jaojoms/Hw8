<?php include "cn_nect.php  "?>
<html>
    <head><meta charset="utf-8"></head>
    <body>
        <?php
            $stmt = $pdo->prepare("SELECT *FROM member");
            $stmt->execute();

            while ($row = $stmt->fetch()) :?>
            <div>
                ชื่อสมาชิก: <?=$row ["name"]?><br>
                ที่อยู่: <?=$row ["address"]?><br>       
                อีเมล์: <?=$row ["email"]?><br>
                <img src='member_photo/<?=$row["username"]?>.jpg' width='100'><br>
                <hr>
            </div>
        <?php endwhile; ?>                
    </body>
</html>