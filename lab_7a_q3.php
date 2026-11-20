<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 7 Q3</title>
    </head>
    <body>
        <?php
         function calculateArea($width, $length){
            $area = $width * $length;
            return $area;
         }
            $width = 4;
            $length = 2;
            $result = calculateArea($width, $length);
        ?>
        <p>The area of the rectangle with width
            <?php echo $width; ?> and length
            <?php echo $length; ?> is
            <?php echo $result; ?></p>
    </body>
</html>