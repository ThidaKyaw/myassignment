<!DOCTYPE html>
<html>
<body>

<?php 
for ($num = 0; $num < 100; $num++) {
    if ($num % 3== 0) {
      continue;
    }
    echo "The number is: $num <br>";
}
?> 
</body>
</html>