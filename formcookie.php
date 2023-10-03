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
    <form action="" method="post" href="">
        <label for=""></label>
        <input type="text" name="txtTen">Nhập tên
        <input type="submit" value="Gửi" name="sbmGuiCookie">
    </form>

    <?php
    //xu ly
    if(isset($_POST["sbmGuiCookie"]))
    {error_reporting(E_ERROR | E_PARSE);
    $a = $_POST["txtTen"];
    setcookie("hten",$a, time()+120);
    }
    ?>
    <a href="sudungcookie.php">Click me</a>

    <?php
    include("footer.php");
    ?>
</body>
</html>