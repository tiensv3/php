<?php
include("ketnoi.php");
$ma=$_REQUEST["mm"];
$sql="select * from monhoc where MaMon='".$ma."'";
$kq=$conn -> query($sql) or die ("Không thể sửa môn");
echo ("<form name='frmSuaMon' action='xly_suamon.php' method='post'>");
while($row=mysqli_fetch_array($kq))
{   
    echo ("Mã môn: <input type='text' name='txtMMon' value='".$row["MaMon"]."'readonly='true'><br>");
    echo ("Tên môn: <input type='text' name='txtTMon' value='".$row["TenMon"]."'><br>");
    echo ("Số TC LT: <input type='text' name='txtLT' value='" .$row["SoTinChiLT"]."'><br>");
    echo ("Số TC TH: <input type='text' name='txtTH' value='".$row["SoTinChiTH"]."'><br>");
    echo ("<input type='submit' name='sbmSuaMon' value='Sửa'>");
}
    echo ("</form>");
?> 