<?php

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
