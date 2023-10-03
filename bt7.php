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
$mau =0;
for ($i = 2; $i <= 10; $i++) {
    if($mau % 2 ==0)
    echo "<tr>";
    else echo("<tr bgcolor='red'>");
    for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        echo "<td>{$i} x {$j} = {$result}</td>";
    }
    echo "</tr>";
    $mau++;
}
echo "</table>";
?>


<?php
include("footer.php");
?>
</body>
</html>

