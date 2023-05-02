<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    $company=array("Maruti Suzuki","Volvo","Mitubashi");
    $counting=array(3,2,1);
    sort($company);
    sort($counting);
    for ($i=0;$i<count($company);$i++){
        echo $company[$i],"<br>";
    }
    foreach($counting as $value){
        echo $value,"<br>";
    }
    ?>
</body>
</html>
