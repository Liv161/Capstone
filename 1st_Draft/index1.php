<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operations</title>
<!--        <link rel="stylesheet" href="style.css" />-->
    </head>
    <body>
        <?php
        // put your code here
//        $a = 10;
//        $b = 20;
//        echo ($a + $b)."<br>";
//        echo ($b - $a)."<br>";
//        echo ($b / $a)."<br>";
//        echo ($a * $b)."<br>";    
        $num1 = 0;
        $num2 = 0;
        $sum = '';
        $diff= '';
        $div = '';
        $multi = '';
        $power = '';
        $avg = '';
        if(isset($_POST['submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $sum = $num1 + $num2;
            $diff = $num1 - $num2;
            $div = $num1 / $num2;
            $multi = $num1 * $num2;
            $power = $num1 ** $num2;      
            $avg = ($sum + $diff + $div + $multi) / 4;
        }
        
        ?>
        
        <form action="#" method="post">
            <label>1st Number</label>
            <br>
            <input type="text" name="num1" value="<?php echo $num1; ?>">
            <br>
            <label>2nd Number</label>
            <br>
            <input type="text" name="num2" value="<?php echo $num2; ?>">
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <h2><?php echo 'The Sum Is: '.$sum; ?></h2>
        <h2><?php echo 'The Difference Is: '.$diff; ?></h2>
        <h2><?php echo 'The Quaotion Is: '.$div; ?></h2>
        <h2><?php echo 'The Product Is: '.$multi; ?></h2>
        <h2><?php echo 'The Power Raised Is: '.$power; ?></h2>
        <h2><?php echo 'The Avg Is: '.$avg; ?></h2>
    </body>
</html>
