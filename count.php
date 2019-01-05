<?php

$total = file_exists() ? file_get_contents('total.log') : '';
if (empty($total)) {
    $total = 0;
}
file_put_contents('total.log', $total + 1);

file_put_contents('count.log', date('Y-m-d H:i:s') . "\n", FILE_APPEND);