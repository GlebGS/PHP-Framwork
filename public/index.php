<?php require dirname(__DIR__) . "/config/init.php";

new \core\App();

throw new Exception('Страница не найдена', 404);
