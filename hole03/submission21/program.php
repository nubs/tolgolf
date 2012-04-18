<?
$s=0;
foreach(file("php://stdin") as $l){
for($i=0;$i<strlen($l);$i++)
$s=$s+ord($l{$i})-ord('a')+1;
echo($s>50)?'higher':'lower'." than fifty\n";
}