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
    <?php
    if(isset($_SESSION["hten"]))
    {
        echo("Họ tên của bạn là ".$_SESSION["hten"]);
        echo "<br> <a href='huysession.php'> Hủy Session </a>";
    }
    else
    {
        echo ("<script laguage='javascript'>
        alert('Chưa làm bài tập form khởi tạo');
        window.location.href = 'formsession.php';
        </script>");
    }
    ?>
    <?php
    include("footer.php");
    ?>
</body>
</html>