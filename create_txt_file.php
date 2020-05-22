<?php

$date = date('d:m:Y - H:i:s');

$filename = getmypid() . '_' . strtolower(get_current_user()) . '.txt';
$text     = 'This file was created by user ' . get_current_user() . ' on ' . $date . '.';

$file = fopen($filename, 'w');
fwrite($file, $text);
fclose($file);