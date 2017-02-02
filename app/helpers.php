<?php

function flash($message, $level = 'info')
{
    session()->flash('flash_message', $message);
    session()->flash('flash_message_level', $level);
}

function progressBarItem($text, App\Batch $batch, $stateToTest)
{
    $button_class = ($stateToTest) ? 'success' : 'default';
    $progress_glyphicon = ($stateToTest) ? '<span class="glyphicon glyphicon-ok pull-right" aria-hidden="true"></span>' : '';
    $template = '<div class="btn-group" role="group">
        <button type="button"
                class="btn btn-default %s">%s 
            %s</button>
    </div>';

    return sprintf($template, $button_class, $text, $progress_glyphicon);
}

function showBatchCount(App\Series $series)
{
    $template = '<span class="label label-default">%s %s</span>';
    $count_indicator = sprintf($template, $series->numberOfBatches(), str_plural('batch', $series->numberOfBatches()));
    return $count_indicator;
}