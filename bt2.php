<?php
include("header.php");
?>

<form action="" name="frmBT2" method="post">
<h1>Giải Phương trình bậc 1</h1>
Nhập a: <input type="number" name="txtsA">
Nhập b: <input type="number" name="txtsB">
<input type="submit" name="giai" value = "Giải">
</form>

<?php
if(isset($_POST["giai"]))
{
    $a = $_POST["txtsA"];
    $b = $_POST["txtsB"];
    if($a==0 && $b == 0)
    {
        echo "Phương trình có vô số nghiệm";
    }
    elseif ($a==0 && $b!=0)
    {
        echo "Phương trình vô nghiệm";
    }
    else
    {
        $c = -$b/$a;
        echo "Phương trình có nghiệm là ".$c;
    }
}

?>

<?php
include("footer.php");
?>