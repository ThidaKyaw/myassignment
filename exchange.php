<!DOCTYPE html>
<html>
<head>
<title> Exchange frist character and last character </title>
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
    echo "$name";
    echo "<br>";
    echo "New String";
    echo "<br>";
    echo strlen($name) > 1 ? substr($name, strlen($name) - 1).substr($name, 1, strlen($name) - 2).substr($name,0,1): $name;
    
}
?>
</body>
</html>