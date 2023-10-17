<?php
include("ketnoi.php");
$ma=$_REQUEST["mm"];
$sql="delete from monhoc where
MaMon='".$ma."'";
$kq = $conn -> query($sql) or die("Không thể xóa môn");
echo ("<script laguage='javascript'>alert('Xóa thành công');window.location.assign('xemmon.php');</script>");
?>
