<?php
session_start();
unset($_SESSION['hten']);
echo '<script>window.location.href = "formsession.php";</script>';
?>
