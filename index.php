<?php

require_once 'vendor/autoload.php';
require_once 'helpers.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- SIDEBAR -->
            <?php echo sidebar(); ?>

            <div class='col-10 text-center'>
                <?php

                if (isset($_GET['task'])) {
                    $taskFile = __DIR__ . '/' . $_GET['task'] . '.php';

                    if (file_exists($taskFile)) {
                        require_once $taskFile;
                    } else {
                        echo "<p>Файл не найден.</p>";
                    }
                } else {
                    echo "<p>Выберите задание слева.</p>";
                }

                ?>
            </div>
        </div>
    </div>

    <!-- JS SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
