<?php
// This is for newest version of carbon 
require "vendor/autoload.php";
use Carbon\Carbon;
$date = Carbon::parse(date('2022-11-15'))->locale('id');       
echo $date->translatedFormat('l, j F Y')."/n";
