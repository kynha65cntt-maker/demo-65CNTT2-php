<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập trình php 1</title>
</head>
<body>
    <!-- lan thu 1 -->
    <!--ok -->
    <?php
     $min = -100;
    $max = 100;
    $N = (rand($min, $max));
    $Tong = 0;
    echo "N = $N <br>";
    if($N >= 0){
        echo "Cac uoc cua $N la: ";
        for($i =1; $i <= $N; $i++){
            if($N % $i == 0){
                echo $i . " ";
            }
        }
    }
        function NLaSoNguyenTo($N){
            
            for($i = 2; $i < $N; $i++){
                if($N % $i != 0) return true;
                else return false;
            }
        }
        function NLaSoChinhPhuong($N){
            $canBacHai = sqrt($N);
            if($canBacHai == floor($canBacHai)) return true;
            else return false;
        }
       if(NLaSoNguyenTo($N)){
            echo "<br> $N la so nguyen to <br>";
        }else{
            echo "<br> $N khong la so nguyen to <br>";
        }
        function TongCacSoNguyenToBeHonN($N){
            $Tong = 0;
            for($i = 2; $i < $N; $i++){
                if(NLaSoNguyenTo($i)){
                    $Tong += $i;
                }
            }
            return $Tong;
        }
        $Tong = TongCacSoNguyenToBeHonN($N);
        echo "<br> Tong cac so nguyen to be hon $N la : $Tong <br>";
       if(NLaSoChinhPhuong($N)){
            echo "<br> $N la so chinh phuong <br>";
        }else{
            echo "<br> $N khong la so chinh phuong <br>";
        }
?>
</body>
