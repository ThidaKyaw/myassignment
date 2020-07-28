<!DOCTYPE html>
<html>
    <head>
        <title>Convert lower input string to uppper string</title>
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
    echo "Old String: ";
    echo $name;
    echo "<br>";
    echo "New String: ";
    echo "<br>";
    echo strtoupper($name);
}
?>
</body>
</html>