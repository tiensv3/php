<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng bán sách</title>
</head>
<body bgcolor="grey">
    <table border="1" cellspacing = "0" width = "1000px" align="center">
        <tr>
            <td colspan="3" height = "150px" ><a href="index.php"> </a></td>
        </tr>

        <tr>
            <td width = "200px" valign = "top">
            <table border="1" width = "100%">
                <tr>
                    <td><a href="bt1.php">BT1</a></td>
                </tr>

                <tr>
                    <td><a href="bt2.php">BT2</a></td>
                </tr>

                <tr>
                    <td><a href="bt1advanced.php">BT1 Nâng cao</a></td>
                </tr>
                <tr>
                    <td><a href="bt4.php">BT4</a></td>
                </tr>
                <tr>
                    <td><a href="formcookie.php">Form Cookie</a></td>
                </tr>
                <tr>
                    <td><a href="formsession.php">Form Session</a></td>
                </tr>
            </table>
        </td>
            <td valign = "top">
                <?php
                session_start();
                ?>