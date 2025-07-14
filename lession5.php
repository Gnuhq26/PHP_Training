<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Person {
            public $name;
            protected $age;
            private $secret;

            public function __construct($name, $age) {
                echo "Hàm __construct() được gọi!<br>";
                $this->name = $name;
                $this->age = $age;
                $this->secret = "Tôi bị gay";
            }

            public function introduce() {
                echo "Xin chào, tôi là $this->name và tôi $this->age tuổi.<br>";
            }

            // Method private 
            private function revealSecret() {
                return $this->secret;
            }

            // Method gọi đến hàm private
            public function showSecret() {
                echo "Bí mật là: " . $this->revealSecret() . "<br>";
            }

            public function __destruct() {
                echo "Hàm __destruct() được gọi khi object bị hủy.<br>";
            }
        }

        //Kế thừa 
        class Student extends Person {
            public $school;

            public function __construct($name, $age, $school) {
                parent::__construct($name, $age); // Gọi constructor cha
                $this->school = $school;
            }

            public function study() {
                echo "$this->name ga lăng, hài hước.<br>";
            }
        }

        //
        echo "<h2>Vòng đời và kế thừa trong OOP</h2>";
        $sv = new Student("Hưng đẹp trai", 21, "Đại học Bách Khoa Hà Nội");

        $sv->introduce();
        $sv->study();
        $sv->showSecret();

    ?>

</body>
</html>