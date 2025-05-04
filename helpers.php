<?php

function startHtmlTemplate(): string
{
    return '<!doctype html>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Bootstrap demo</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
            </head>
            <body>';
}

function endHtmlTemplate(): string
{
    return '
        <!-- JS SCRIPTS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
        </body>
        </html>';
}

function sidebar(): string
{
    $collectListTask = collectListTaskChapter7();

    $sidebar = '<div class="col-2">
                    <div class="list-group">
                    <a href="/" class="link-primary list-group-item list-group-item-action">Home...</a>';

    foreach ($collectListTask as $task) {
        $sidebar .= "<a href='?task=7/$task' class='list-group-item list-group-item-action'>#7.$task</a>";
    }

    $sidebar .= '</div></div>';

    return $sidebar;
}

// TODO: make more universal.
function collectListTaskChapter7(): array
{
    $allFiles = scandir(__DIR__ . '/7');

    foreach ($allFiles as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            $phpFiles[] = basename($file, '.php');
        }
    }

    return $phpFiles ?? [];
}

function outputTaskConditionTemplate(string $taskCondition): string
{
    return "<h5>Условие задачи</h5>
            <p>$taskCondition</p>
            <h5>Результат: </h5>";
}
