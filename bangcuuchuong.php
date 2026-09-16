<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bang Cuu Chuong</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <?php
            for($i = 1; $i <= 10; $i++){
                echo "<td>chương $i</td>";
            }
            ?>
        </tr>
        <?php
        for($i = 1; $i <= 10; $i++){
            echo "<tr>";
            for($j = 1; $j <= 10; $j++){
                echo "<td>" . "$i x $j = " . $i * $j . "</td>";
            }
            echo "</tr>";
        }
        ?>
        <!-- code ban dau  -->
        <!-- <?php
        for($i = 1; $i <= 10; $i++){
            echo "<tr>";
            echo "<td>Bảng cửu chương $i</td>";
            echo "<td>";
            for($j = 1; $j <= 10; $j++){
                $ketqua = $i * $j;
                echo "$i x $j = $ketqua <br>";
            }
            echo "</td>";
            echo "</tr>";
        }
        ?> -->
</body>
</html>