<!DOCTYPE html>
<html>
    <head>
        <title>first web</title>
    </head>

    <body bgcolor="red">
        <h1>this is my website</h1>
<?php
//local variable
function myfun(){
    $x=20;
    echo $x;
}
// echo $x;
myfun();

//global variable
$z=30;
function myfun1(){
global $z;
    echo $z;
} 
echo $z;
myfun1();


function myfun3(){
     static $a=3;
    print( $a);
    $a++;
}
myfun3();//
myfun3();
myfun3();


?>
    </body>
</html>
