<!DOCTYPE html>
<html>
    <head>
        <title>Remove Character</title>
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Enter Char:<input type="text" name="name">
        Enter postion:<input type="text" name="postion">
        <input type="submit">
        </form>
        <?php
        echo "Result";
        echo "<br>";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['name'];
            $postion = $_POST['postion'];
            echo "Old String";
            echo "<br>";
            echo "$name";
            echo "<br>";
            echo "New String";
            echo "<br>";
            echo substr($name,0,$postion).substr($name,$postion+1,strlen($name).$postion);
        }
        ?>
    </body>
</html>
