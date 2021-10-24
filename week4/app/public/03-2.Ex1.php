<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function convertRadiansto($radians)
    {
        $pi = pi();
        return $radians * (180 / $pi);
    }
    function convertDegreesto($degrees)
    {
        $pi = pi();
        return $degrees * $pi / 180;
    }
    $input = $_POST['number'];
    $choose = $_POST['choose'];
    if ($choose == 1) {
        $kq =   convertRadiansto($input);
        print " $input (radians) tức $kq (degrees)";
    } else {
        $kq =   convertDegreesto($input);
        print " $input (degrees) tức $kq (radians)";
    }

    ?>
</body>

</html>