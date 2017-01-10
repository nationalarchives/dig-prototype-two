<?php

function flash($message, $level = 'info')
{
    session()->flash('flash_message', $message);
    session()->flash('flash_message_level', $level);
}

function progressBarItem($text, App\Batch $batch)
{
    $button_class = ($batch->metadataHasBeenUploaded()) ? 'success' : 'default';
    $progress_glyphicon = ($batch->metadataHasBeenUploaded()) ? '<span class="glyphicon glyphicon-ok pull-right" aria-hidden="true"></span>' : '';
    $template = '<div class="btn-group" role="group">
        <button type="button"
                class="btn btn-default %s">%s 
            %s</button>
    </div>';

    return sprintf($template, $button_class, $text, $progress_glyphicon);
}