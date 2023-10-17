<body>
<table border="1">
<tr>
<th>Mã môn</th>
<th>Tên môn</th>
<th>LT</th>
<th>TH</th>
<th colspan="2">Xử lý</th>
</tr>
<?php
include ("ketnoi.php");
$sql="select * from monhoc";
$kq=$conn -> query($sql) or die ("Không thể xem môn");
while($row=mysqli_fetch_array($kq))
{
echo ("<tr>");
$mamon=$row["MaMon"];
echo ("<td>".$row["MaMon"]."</td>");
echo ("<td>".$row["TenMon"]."</td>");
echo ("<td>".$row["SoTinChiLT"]."</td>");
echo ("<td>".$row["SoTinChiTH"]."</td>");
echo ("<td><a href='suamon.php?mm=$mamon'> Sửa </a></td>");
echo ("<td><a href='xoamon.php?mm=$mamon'> Xóa</a></td>");
echo ("</tr>");
}
?>
</table>
<button><a href='themmon.php'>Thêm môn</a></button>
</body>