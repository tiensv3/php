<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>muhaha</title>
    
</head>
<body>
<?php
include("header.php");
?>
<form action="" method="post" name="frmBT1" onsubmit="return kiemTra()">
    Nhập a: <input type="number" name="txtNhapA" value="<?php echo @$_POST['txtNhapA']?>">
    <br>
    Nhập b: <input type="number" name = "txtNhapB" value="<?php echo @$_POST['txtNhapB']?>">
    <fieldset>
        <legend>Chọn phép toán</legend>
        <input type="submit" name="sbmPhepToan" value="+">
        <input type="submit" name="sbmPhepToan" value="-">
        <input type="submit" name="sbmPhepToan" value="*">
        <input type="submit" name="sbmPhepToan" value="/">
    </fieldset>
    Kết quả:


    <?php 
    include("ham.php");
    if(isset($_POST["sbmPhepToan"]))
    $a = $_POST["txtNhapA"];
    $b = $_POST["txtNhapB"];
    $dau = $_POST["sbmPhepToan"];//lay gia tri cua name sbmPhepToan
    echo tinhToan($a, $b, $dau);
    ?>

<?php 
include("footer.php");
?>
</body>
</html>