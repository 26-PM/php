<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <style>
    body{
        font-size: 3vw;
    }
    </style>
</head>
<body>
    <?php
    echo "<center><h1>PHP Questions.</h1></center>";
    $radius=5;
    $length=10;
    $breadth=15;
    echo "Radius=5 and Area=" . 22/7*$radius*$radius;
    echo "<br>"; 
    echo "Length and Breadth are 10 and 15 respectively & area is ".$length*$breadth.".";
    echo "<br>";echo "<br>"; 
    echo "Formula : C=(F-32)*5/9";
    echo "<br>"; 
    $f=100;
    echo "F=100. Now C= ".($f-32)*5/9;
    echo "<br>";
    echo "<br>";echo "<br>";
    $bs=50000;
    $hra=((20/100)*$bs);
    $da=((40/100)*$bs);
    echo "Gross salary=".($hra+$da+$bs);
    echo "<br>";echo "<br>";
    ?>
</body>
</html>
