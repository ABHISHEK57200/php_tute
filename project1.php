<!DOCTYPE html>
<html>
    <head>
        <title>coutn</title>
    </head>
    <body>
        <?php
        $count=0;
        if(isset($_POST['count'])){
            $count=$_POST['count'];//0
        }
        if(isset($_POST['increment']))
            $count++;
        if(isset($_POST['decrement']))
            $count--;
        ?>
        <form action="" method=post>
            <input type="hidden" name="count" value=<?php echo $count ?>>

            <button name="increment" >+</button>
             <button name="decrement" >-</button>
        </form>
        <h1><?php echo $count; ?></h1>
    </body>
</html>