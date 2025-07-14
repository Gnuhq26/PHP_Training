<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Function - Include - Logs</title>
</head>
<body>
    <?php
        // Include file chứa các hàm
        include 'lession3_Function.php';

        // Gọi hàm có tham số, giá trị mặc định, trả về
        $sum1 = add(5, 10);          // Truyền 2 tham số
        $sum2 = add(7);              // Dùng giá trị mặc định cho $b
        $greeting = greet("Hưng");   // Truyền tên
        $defaultGreeting = greet(); // Dùng mặc định

        echo "<h2>Minh họa Function</h2>";
        echo "Tổng 5 + 10 = $sum1 <br>";
        echo "Tổng 7 + 0 = $sum2 <br>";
        echo $greeting . "<br>";
        echo $defaultGreeting . "<br>";

        // Ghi log thử nghiệm
        writeLog("Trang được tải thành công.");
        writeLog("Người dùng là Hưng đẹp trai.");

        echo "<p><i>Log đã được ghi vào file <b>log.txt</b>.</i></p>";
    ?>
</body>
</html>
