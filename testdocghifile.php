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

    <form action="" name="frm1" method="post">
        Nhập nội dung: <input type="text" name="txtNoidung">
        <br>
        <input type="submit" value="Ghi đè" name="sbmGhide">
        <br>
        <input type="submit" value="Ghi tiếp" name="sbmGhitiep">
        <br>
        <input type="submit" value="Xem nội dung file" name="sbmXemnoidungfile">
        <br>
        <input type="submit" value="Xem từng chữ" name="sbmXemtungchu">
    </form>

    <?php 
    if(isset($_POST["sbmGhide"]))
    {
        $dl = $_POST["txtNoidung"];
        $f = fopen("D:/test/test.txt", "w+") or die("Không mở được!");
        fwrite($f, $dl) or die("Không ghi được");
        echo("<script language='javascript'> alert('Ghi thành công!') </script>");
    }
    if(isset($_POST["sbmGhitiep"]))
    {
        $dl = $_POST["txtNoidung"];
        $f = fopen("D:/test/test.txt", "a+") or die("Không mở được!");
        fwrite($f, $dl) or die("Không ghi được");
        echo("<script language='javascript'> alert('Ghi thành công!') </script>");
    }
    if(isset($_POST["sbmXemnoidungfile"]))
    {
        $f = fopen("D:/test/test.txt", "r") or die("Không mở được");
        echo fgets($f);
        fclose($f);
    }
    if(isset($_POST["sbmXemtungchu"]))
    {
        $f = fopen("D:/test/test.txt", "r") or die("Không mở được");
        while(!feof($f))
        {
            echo fgetc($f);
        }

        fclose($f);
    }
    ?>


    <?php
include("footer.php");
?>
</body>
</html>