<?for(;$i=strlen($l=readline(''));$s=0){for(;$i;)$s+=ord($l[--$i])-96;echo($s>50?"high":"low")."er than fifty
";}