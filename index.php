<?php

require_once 'vendor/autoload.php';
require_once 'helpers.php';

echo startHtmlTemplate();

?>

<div class="container-fluid">
    <div class="row">
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

<?php

echo endHtmlTemplate();
