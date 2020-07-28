<?php
    function mytest(){
        static $x=2;
        echo $x;
        $x++;
    }
    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
?>