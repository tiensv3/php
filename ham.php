<?php
 function tinhToan($a, $b, $pheptoan="+")
 {
    $kq = 0;
    switch($pheptoan)
    {
        case "+":
        $kq = $a + $b;
        break;
        case "-":
        $kq = $a - $b;
        break;
        case "*":
        $kq = $a * $b;
        break;
        case "/":
        $kq = $a / $b;
        break;
    }
    return $kq;
 }
?>