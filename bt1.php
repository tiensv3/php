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
        <input type="submit" name="sbmCong" value="+">
        <input type="submit" name="sbmTru" value="-">
        <input type="submit" name="sbmNhan" value="*">
        <input type="submit" name="sbmChia" value="/">
    </fieldset>
    Kết quả:
    <?php
    if(isset($_POST["sbmCong"]))
    { 
        $a = $_POST["txtNhapA"];
        $b = $_POST["txtNhapB"];
        $c = $a + $b;
        echo $c;
    }
    elseif(isset($_POST["sbmTru"]))
    {
        $a = $_POST["txtNhapA"];
        $b = $_POST["txtNhapB"];
        $c = $a - $b;
        echo $c;
    }
    elseif(isset($_POST["sbmNhan"]))
    {
        $a = $_POST["txtNhapA"];
        $b = $_POST["txtNhapB"];
        $c = $a * $b;
        echo $c;
    }
    elseif(isset($_POST["sbmChia"]))
    {
        $a = $_POST["txtNhapA"];
        $b = $_POST["txtNhapB"];
        $c = $a / $b;
        echo $c;
    }

    ?>
</form>

<script>
    function kiemTra()
    {
        a =document.frmBT1.txtNhapA.value;
        b =document.frmBT1.txtNhapB.value;
        if(a=="")
        {
            alert("Bạn chưa nhập A");
            document.frmBT1.txtNhapA.focus();
            return false;
        }
        else if(b=="")
        {
            alert("bạn chưa nhập B");
            document.frmBT1.txtNhapB.focus();
            return false;
        }
        else{
            return true;
        }
    }
    </script>

<?php 
include("footer.php");
?>

</body>
</html>