<?
foreach(file("php://stdin")as $l){
$s=0;
foreach(str_split(trim($l))as $c)
$s+=ord($c)-ord('a')+1;
echo (($s>50)?high:low)."er than fifty\n";}