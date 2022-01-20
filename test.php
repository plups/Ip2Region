<?php
require 'Ip2Region.php';

$ip2region = new Ip2Region();

$ip = '49.140.232.170';
echo PHP_EOL;
echo "查询IP：{$ip}" . PHP_EOL;
$info = $ip2region->btreeSearch($ip);
var_export($info);

echo PHP_EOL;
$info = $ip2region->memorySearch($ip);
var_export($info);
echo PHP_EOL;

