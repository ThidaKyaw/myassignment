<?php
    $x=10;
    $y=15;
    function mytest(){
        $GLOBALS['x']=$GLOBALS['x'] + $GLOBALS['y'];
    }
    mytest();
    echo $x;
?>