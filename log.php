<?php

$total = file_exists() ? file_get_contents('total.log') : 0;
if (empty($total)) {
    $total = 0;
}
echo $total . "\n";
echo file_exists() ? file_get_contents('count.log') : '无';