<!DOCTYPE html>
<html>
    <head>
        <title>My Example</title>
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
    echo $name;
    echo "<br>";
    $add=substr($name,strlen($name)-1);
    echo $add.$name.$add;
}
?>
</body>
</html>