<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Tự động load class theo namespace (đơn giản, không cần composer)
        spl_autoload_register(function ($class) {
            // Bỏ prefix 'Lession9\' nếu có
            $prefix = 'lession9\\';
            $base_dir = __DIR__ . DIRECTORY_SEPARATOR;

            if (strncmp($prefix, $class, strlen($prefix)) === 0) {
                // Cắt prefix ra khỏi tên class
                $relative_class = substr($class, strlen($prefix));

                // Chuyển \ thành /
                $relative_class = str_replace('\\', DIRECTORY_SEPARATOR, $relative_class);

                // Ghép lại thành đường dẫn đầy đủ
                $file = $base_dir . $relative_class . '.php';

                if (file_exists($file)) {
                    require_once $file;
                } else {
                    echo "Không tìm thấy file: $file<br>";
                }
            }
        });

        //Gọi Controller để hiển thị thông tin user
        use lession9\Controller\UserController;

        $ctrl = new UserController();
        $ctrl->show();
    ?>  
</body>
</html>