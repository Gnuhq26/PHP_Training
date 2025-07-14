<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2>EXCEPTION HANDLING</h2>";

        try {
            $a = 5;
            $b = 0;
            if ($b == 0) {
                throw new Exception("Không thể chia cho 0");
            }
            echo $a / $b;
        } catch (Exception $e) {
            echo "Lỗi xảy ra: " . $e->getMessage() . "<br>";
        } finally {
            echo "Đã chạy xong khối try-catch-finally<br>";
        }

        // 2. Nested Exception
        try {
            try {
                throw new Exception("Lỗi bên trong try lồng nhau");
            } catch (Exception $e1) {
                echo "Cấp 1: " . $e1->getMessage() . "<br>";
                throw new Exception("Lỗi cấp 2 sau catch");
            }
        } catch (Exception $e2) {
            echo "Cấp 2: " . $e2->getMessage() . "<br>";
        }

        echo "<h2>DATABASE TRANSACTION</h2>";

        // Kết nối đến MySQL 
        $host = "127.0.0.1";
        $db = "test_db";
        $user = "root";
        $pass = "hung1234";

        $pdo = null;

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $pdo->beginTransaction();

            $pdo->exec("INSERT INTO users (name, email) VALUES ('Nguyen Van A', 'a@gmail.com')");
            $pdo->exec("INSERT INTO users (name, email) VALUES ('Nguyen Van B', 'b@gmail.com')");

            // throw new Exception("Lỗi giả lập để test rollback");

            $pdo->commit();
            echo "Giao dịch thành công, dữ liệu đã được lưu.<br>";

        } catch (Exception $e) {
            if ($pdo !== null && $pdo->inTransaction()) {
                $pdo->rollBack(); //Chỉ rollback nếu đã có transaction đang hoạt động
            }
            echo "Giao dịch thất bại: " . $e->getMessage() . "<br>";
        }
    ?>

</body>
</html>