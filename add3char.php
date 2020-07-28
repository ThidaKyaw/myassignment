<!DOCTYPE html>
<html>
    <head>
        <title>Frist 3 characters added at both front and back</title>
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Enter Char: <input type="text" name="name">
        <input type="Submit">
</form> 
<?php
echo "Result";
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    echo "Old String";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo "New String";
    echo "<br>";
    if(strlen($name) < 3)
    {
        echo $name.$name.$name;
        echo "<br>";
    }
    else
    {
        $add= substr($name, 0, 3);
        echo $add.$name.$add;
        echo "<br>";
    }
}
?>
</body>
</html>