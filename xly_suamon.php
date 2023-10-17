<?php
include("ketnoi.php");
$ma=$_POST["txtMMon"];
$ten=$_POST["txtTMon"];
$lt=$_POST["txtLT"];
$th=$_POST["txtTH"];
$sql="update monhoc set TenMon='".$ten."', SoTinChiLT=".$lt.",
SoTinChiTH=".$th." where MaMon='".$ma."'";
$kq=$conn -> query($sql) or die ("Không thể sửa môn");
echo ("<script language='javascript'>alert('Sửa thành công');window.location.assign('xemmon.php');</script>");
?>
