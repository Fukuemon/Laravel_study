<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i=1; $i<=100; $i++){
        if($i % 2 == 0){
            echo $i . '<br>';
        }
    }
    ?>
    
    <!-- 模範回答 -->
    <?php
    for ($i=2; $i<=100; $i += 2){
        echo $i . '<br>';
    }
    ?>
</body>
</html>