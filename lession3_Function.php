<?php
// Hàm tính tổng 2 số
function add($a, $b = 0) {
    return $a + $b;
}

// Hàm chào người dùng
function greet($name = "bạn") {
    return "Xin chào, " . $name . "!";
}

// Hàm ghi log
function writeLog($message) {
    $logFile = "log.txt";
    $time = date("Y-m-d H:i:s");
    file_put_contents($logFile, "[$time] $message\n", FILE_APPEND);
}
?>
