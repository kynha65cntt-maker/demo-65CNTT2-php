<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập trình php 1</title>
</head>
<body>
    <p>Cau 1</p>
    <?php
    $min = 1;
    $max = 100;
    $N = random_int($min, $max);
    echo "Số ngẫu nhiên từ $min đến $max là: $N <br>";
    echo "Các số chẵn từ 1 đến N là: <br>";
    for($i = 1; $i <= $N; $i++){
        if($i%2==0){
            echo "$i  ";
        }
    }
    ?>