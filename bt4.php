<?php
include("header.php");
?>

<h1 align="center">Tính diện tích</h1>

<form action="" method="post">
    <p>Hãy lựa chọn hình để tính diện tích</p>
    <input type="radio" name="rdChon" id="" value="tron" checked> Hình Tròn
    <br>
    <input type="radio" name="rdChon" id="" value="tamgiac"> Hình Tam Giác
    <br>
    <input type="radio" name="rdChon" id="" value="hcn"> Hình Chữ Nhật
    <br>
    <input type="submit" name="sbmBatDau" id="" value="Bắt đầu">
</form>

<?php
if(isset($_POST["sbmBatDau"])){
    $chon = $_POST["rdChon"];
    switch($chon)
    {
        case "tron":
        echo("<form name='frmDTHT' method='post'>");
        echo("Nhập bán kính: <input type='text' name='txtBankinh' >");
        echo("<br>");
        echo("<input type='submit' name='sbmDtht' value='Tính'>");
        echo("</form>");
        break;
        case "tamgiac":
        echo("<form name='frmDTTG' method='post'>");
        echo("Nhập cạnh đáy: <input type='text' name='txtCanhday'");
        echo("<br>");
        echo("Nhập đường cao: <input type='text' name='txtDuongcao'");
        echo("<br>");
        echo("<input type='submit' name='sbmDttg' value='Tính'>");
        echo("</form>");
        break;
        case "hcn":
        echo("<form name='frmDTHCN' method='post'>");
        echo("Nhập chiều dài: <input type='text' name='txtChieudai'>");
        echo("<br>");
        echo("Nhập chiều rộng: <input type='text' name='txtChieurong'>");
        echo("<br>");
        echo("<input type='submit' name='sbmDthcn' value='Tính'>");
        echo("</form>");
        break;
    }
}
?>

<?php
if(isset($_POST['sbmDtht']))
{
    $R = $_POST['txtBankinh'];
    $Shinhtron = 3.14 * pow($R, 2);
    echo("Diện tích hình tròn là: ".$Shinhtron);
}

elseif(isset($_POST['sbmDttg']))
{
    $canhday = $_POST['txtCanhday'];
    $h = $_POST['txtDuongcao'];
    $Stamgiac = (1/2) * $canhday * $h;
    echo("Diện tích tam giác là: ".$Stamgiac);
}
elseif(isset($_POST['sbmDthcn']))
{
    $cd = $_POST['txtChieudai'];
    $cr = $_POST['txtChieurong'];
    $Shcn = $cd * $cr;
    echo("Diện tích hình chữ nhật là: ".$Shcn);
}

?>


<?php
include("footer.php");
?>
