<?php
include("config.php");
if(isset($_POST["sbmThem"]))
{
    $ma=$_POST["txtMMon"];
    $ten=$_POST["txtTMon"];
    $lt=$_POST["txtLThuyet"];
    $th=$_POST["txtTHanh"];
    $sql="insert into monhoc values ('".$ma."', '".$ten."', ".$lt.",
    ".$th.")";
    $kq=$conn -> query($sql) or die ("Không thể thêm môn học
    mới");
    echo ("Thêm thành công");
    $conn -> close();
}

else
{
    echo "Lỗi";
}

?>