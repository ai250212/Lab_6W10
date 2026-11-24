
<!DOCTYPE html>
<html>
<head>
    <title>Lab 6 Q3</title>
</head>
<body>

    <?php

    function calculateArea($length, $width)
    {
        $area = $length * $width;
        return $area;
    }

    $length = 50;
    $width = 20;

    $result = calculateArea($length, $width);

    echo "The area of the rectangle is: " . $result;

    ?>

</body>
</html>
