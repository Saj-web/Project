<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP if-else statement</title>
</head>
<body>
    <?php
    $marks=69;
    if($marks<33){
        echo"fail";
    }
    elseif($marks>=34 && $marks<50){
        echo"D";
    }
    elseif($marks>=50 && $marks<65){
        echo"C";
    }
    elseif($marks>=65 && $marks<80){
        echo"B";
    }
    elseif($marks>=80 && $marks<90){
        echo"A";
    }
    elseif($marks>=90 && $marks<100){
        echo"A+";
    }
    else{
        echo"Invalid input";
    }
    ?> 
</body>
</html>