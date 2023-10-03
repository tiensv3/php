<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include("header.php");
?>

<?php
echo "<table border='1' width='100%' cellspacing='0'>";
for ($i = 2; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        $class = ($i + $j) % 2 == 0 ? 'even' : 'odd';
        echo "<td class='$class'>{$i} * {$j} = {$result}</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<style>
     .even {
        background-color: lightgray;
    }

    .odd {
        background-color: white;
    }
</style>

<?php
include("footer.php");
?>
</body>
</html>

