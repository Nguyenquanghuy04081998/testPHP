<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
     $arr = array();
     $arr1 = array();
     for($i=0;$i<9;$i++){
        $so = rand(-(2**30), 2**30-1);
         array_push($arr,$so);
     }
     foreach ($arr as $key => $value) {

         echo $value,',';
     }
     $max = max($arr);
     foreach ($arr as $key => $value) {

        if($value == (int)max($arr)){
            array_splice($arr, $key);
        }
    }
    $max1 =max($arr);
    echo '<br>';
    $ketqua = $max+$max1;
    echo 'ket qua là: '.$ketqua;
    ?>
</body>
</html>