<?$a="abcXdefXghiXjklXmnoXpqrstuvXwxyz";while($n=fgetc(STDIN))echo($n=="\n"?$n:floor(strpos($a,$n)/4)+2);