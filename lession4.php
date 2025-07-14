<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Student {
            public $name;
            public $age;
            public $school;

            //Constructor 
            public function __construct($name, $age, $school) {
                $this->name = $name;
                $this->age = $age;
                $this->school = $school;
            }

            public function getInfo() {
                return "Tên: $this->name - Tuổi: $this->age - Trường: $this->school";
            }
        }

        $student1 = new Student("Hưng đẹp trai", 21, "Đại học Bách Khoa");

        echo "<h2>Thông tin sinh viên</h2>";
        echo "Tên: " . $student1->name . "<br>";
        echo "Tuổi: " . $student1->age . "<br>";
        echo "Trường: " . $student1->school . "<br>";

        echo "<br><strong>Tổng hợp:</strong><br>";
        echo $student1->getInfo();
    ?>
</body>
</html>