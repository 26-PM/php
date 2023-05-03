<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        *{
            font-size: 3vw;
        }
    </style>
</head>
<body>
    <?php
    $company=array("Maruti Suzuki","Volvo","Mitubashi");
    $counting=array(3,1,2);
    sort($company);
    sort($counting);
    for ($i=0;$i<count($company);$i++){
        echo $company[$i],"<br>";
    }
    echo "<br>";

    echo "sort()","<br>";
    foreach($counting as $value){
        echo $value,"<br>";
    }
    echo "<br>";

    echo "rsort <br>";
    rsort($counting);
    foreach($counting as $value){
        echo $value,"<br>";
    }

    echo "<br>";

    echo "asort() <br>";
    $associative=array("a"=>"2","b"=>"1");
    asort($associative);
    foreach($associative as $x => $y ){
        echo "Key=$x","<br>";
        echo "Value=$y","<br>";
    }
    echo "<br>";
    echo "ksort <br>";
    ksort($associative);
    foreach($associative as $x => $y ){
        echo "Key=$x","<br>";
        echo "Value=$y","<br>";
    }
    echo "<br>";

    echo "arsort() <br>";
    arsort($associative);
    foreach($associative as $x => $y){
        echo "Key:$x <br>";
        echo "Value:$y <br>";
    }
    echo "<br>";

    echo "krsort <br>";
    krsort($associative);
    foreach($associative as $x => $y){
        echo "Key:",$x,"<br>";
        echo "Value:",$y,"<br>";
    }

    ?>
</body>
</html>
