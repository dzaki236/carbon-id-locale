<?php
// This is for newest version of carbon 
use Carbon/Carbon;
$date = Carbon::parse(date('2022-11-15'))->locale('id')->translatedFormat('l, j F Y');       
echo $date."/n";
