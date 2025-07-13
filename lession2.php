<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Hưng đẹp trai";
        $age = 21;
        $height = 1.72;
        $is_student = true;

        echo "<h2>Thông tin cá nhân</h2>";
        echo "Tên: " . $name . "<br>";
        echo "Tuổi: " . $age . "<br>";
        echo "Chiều cao: " . $height . " mét<br>";
        echo "Là sinh viên? " . ($is_student ? "Có" : "Không") . "<br>";

        //Array
        $skills = ["Đẹp tra", "Ga lăng", "Hút gái", "Hài hước"];
        echo "<br>Các kỹ năng: <ul>";
        foreach ($skills as $skill) {
            echo "<li>" . $skill . "</li>";
        }
        echo "</ul>";

        //Const
        define("SCHOOL", "Đại học Bách Khoa Hà Nội");
        echo "Học tại: " . SCHOOL;
    ?>
</body>
</html>