<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin Hưng đẹp trai</title>
</head>
<body>
    <?php
        //Toán tử 
        $x = 10;
        $y = 3;

        echo "<h3>Toán tử trong PHP</h3>";
        echo "x = $x, y = $y <br>";

        // Toán tử số học
        echo "x + y = " . ($x + $y) . "<br>";
        echo "x - y = " . ($x - $y) . "<br>";
        echo "x * y = " . ($x * $y) . "<br>";
        echo "x / y = " . ($x / $y) . "<br>";
        echo "x % y = " . ($x % $y) . "<br>";

        // Toán tử so sánh
        echo "x > y ? " . ($x > $y ? "Đúng" : "Sai") . "<br>";
        echo "x == y ? " . ($x == $y ? "Đúng" : "Sai") . "<br>";

        // Toán tử gán kết hợp
        $x += 5; // tương đương $x = $x + 5
        echo "x sau khi cộng thêm 5: $x <br>";


        $name = "Hưng đẹp trai";
        $age = 21;
        $height = 1.72;
        $is_student = true;

        echo "<h2>Thông tin cá nhân</h2>";
        echo "Tên: " . $name . "<br>";
        echo "Tuổi: " . $age . "<br>";
        echo "Chiều cao: " . $height . " mét<br>";
        echo "Là sinh viên? " . ($is_student ? "Có" : "Không") . "<br>";

        // Điều kiện rẽ nhánh 
        if ($age >= 18) {
            echo "Bạn đã đủ tuổi trưởng thành.<br>";
        } else {
            echo "Bạn vẫn là trẻ vị thành niên.<br>";
        }

        // Loop for
        echo "<br>Số đếm từ 1 đến 5:<br>";
        for ($i = 1; $i <= 5; $i++) {
            echo "$i ";
        }

        //Array 
        $skills = ["Đẹp trai", "Ga lăng", "Hút gái", "Hài hước"];
        echo "<br>Các kỹ năng: <ul>";
        foreach ($skills as $skill) {
            echo "<li>" . $skill . "</li>";
        }
        echo "</ul>";

        define("SCHOOL", "Đại học Bách Khoa Hà Nội");
        echo "Học tại: " . SCHOOL . "<br>";

        // Object
        class Person {
            public $name;
            public $age;

            public function __construct($name, $age) {
                $this->name = $name;
                $this->age = $age;
            }

            public function introduce() {
                return "Xin chào, tôi là $this->name và tôi $this->age tuổi.";
            }
        }

        $person1 = new Person("Hưng đẹp trai", 21);
        echo $person1->introduce();
    ?>
</body>
</html>
