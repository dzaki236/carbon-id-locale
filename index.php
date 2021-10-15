<?php
require "vendor/autoload.php";
use Carbon\Carbon;
$date = Carbon::parse(date('Y-m-d'))->locale('id');

$date->settings(['formatFunction' => 'translatedFormat']);

echo $date->format('l, j F Y ;')."\n"; // Tgl sekarang

?>