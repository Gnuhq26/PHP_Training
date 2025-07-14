<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2>Polymorphism</h2>";

        class Animal {
            public function makeSound() {
                echo "Animal makes a sound<br>";
            }
        }

        class Dog extends Animal {
            public function makeSound() {
                echo "Gâu gâu<br>";
            }
        }

        class Cat extends Animal {
            public function makeSound() {
                echo "Meo meo<br>";
            }
        }

        $animals = [new Animal(), new Dog(), new Cat()];
        foreach ($animals as $a) {
            $a->makeSound(); 
        }

        //Overloading 
        class Calculator {
            public function __call($method, $args) {
                if ($method == 'multiply') {
                    if (count($args) == 2) {
                        return $args[0] * $args[1];
                    } elseif (count($args) == 3) {
                        return $args[0] * $args[1] * $args[2];
                    } else {
                        return "Không hỗ trợ số lượng đối số: " . count($args);
                    }
                } else {
                    return "Không tìm thấy phương thức '$method'";
                }
            }
        }

        $calc = new Calculator();
        echo $calc->multiply(2, 3);       
        echo $calc->multiply(2, 3, 4);    
        echo $calc->divide(6, 2);         


        echo "<h2>Abstraction</h2>";

        interface Device {
            const BRAND = "Generic";

            public function turnOn();  
            public function turnOff();
        }

        class Phone implements Device {
            public function turnOn() {
                echo "Phone is turning on<br>";
            }

            public function turnOff() {
                echo "Phone is turning off<br>";
            }
        }

        abstract class Vehicle {
            protected $brand;

            public function __construct($brand) {
                $this->brand = $brand;
            }

            abstract public function start();
            public function showBrand() {
                echo "🚗 Vehicle brand: $this->brand<br>";
            }
        }

        class Car extends Vehicle {
            public function start() {
                echo "Car engine started!<br>";
            }
        }

        echo "<h3>Interface</h3>";
        $p = new Phone();
        $p->turnOn();
        $p->turnOff();
        echo "Thương hiệu từ Interface: " . Device::BRAND . "<br>";

        echo "<h3>Abstract Class</h3>";
        $car = new Car("Toyota");
        $car->start();
        $car->showBrand();
    ?>

</body>
</html>