<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["hten"]))
    {
        echo("Họ tên của bạn là ".$_COOKIE["hten"]);
        echo "<br> <a href='huycookie.php'> Hủy Cookie </a>";
    }
    else
    {
        echo ("<script laguage='javascript'>
        alert('Chưa làm bài tập form khởi tạo');
        window.location('formcookie.php');
        </script>");
    }
    ?>
</body>
</html>