<?php

function htmlFromFile($fileName) {
    $fileName = 'htmll/'.$fileName.'.html';
    $fp = fopen($fileName, 'r');
    $content = fread($fp, filesize($fileName));
    fileclose($fp);

    return $content;
}