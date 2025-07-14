<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        trait Logger {
            public function log($string) {
                echo "Log: $string<br>";
            }
        }
        
        class User {
            use Logger;
        }
        
        $user = new User();
        $user->log("User created");

        //Precedence
        // trait Logger {
        //     public function log() {
        //         echo "From Trait<br>";
        //     }
        // }
        
        // class App {
        //     use Logger;
        
        //     public function log() {
        //         echo "From Class<br>";
        //     }
        // }
        
        // $app = new App();
        // $app->log(); // Output: From Class

        //Multiple Traits
        trait A {
            public function sayA() {
                echo "Trait A<br>";
            }
        }
        trait B {
            public function sayB() {
                echo "Trait B<br>";
            }
        }
        
        class MyClass {
            use A, B;
        }
        
        $obj = new MyClass();
        $obj->sayA(); // Trait A
        $obj->sayB(); // Trait B

        //Conflict Resolution
        // trait A {
        //     public function hello() {
        //         echo "Hello from A<br>";
        //     }
        // }
        // trait B {
        //     public function hello() {
        //         echo "Hello from B<br>";
        //     }
        // }
        
        // class MyClass {
        //     use A, B {
        //         A::hello insteadof B;
        //         B::hello as helloFromB;
        //     }
        // }
        
        // $obj = new MyClass();
        // $obj->hello();        // A
        // $obj->helloFromB();   // B

        //Traits Composed from Traits
        // trait Logger {
        //     public function log($msg) {
        //         echo "Log: $msg<br>";
        //     }
        // }
        
        // trait DBLogger {
        //     use Logger;
        
        //     public function logToDB($msg) {
        //         echo "Logging to DB: $msg<br>";
        //     }
        // }
        
        // class App {
        //     use DBLogger;
        // }
        
        // $app = new App();
        // $app->log("Test");        // Từ trait Logger
        // $app->logToDB("Insert");  // Từ trait DBLogger

        //Abstract Trait Members
        // trait Logger {
        //     abstract public function format($msg);
        
        //     public function log($msg) {
        //         echo $this->format($msg) . "<br>";
        //     }
        // }
        
        // class FileLogger {
        //     use Logger;
        
        //     public function format($msg) {
        //         return "[FILE] $msg";
        //     }
        // }
        
        // $logger = new FileLogger();
        // $logger->log("Backup completed"); // Output: [FILE] Backup completed

        
    ?>
</body>
</html>