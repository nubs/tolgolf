<?for(;$a[]=fgets(STDIN);$t++)$b[]=20;foreach($b as$k=>&$u)if($a[$k]{2}==i||!$u+=5){$d=$u/($t-1)%99;$m=!$m;foreach($b as$j=>&$c)if($k-$j){$u+=$m?-$u:$i=min(5,$c);$c+=$m?$d:-$i;}}echo join("
",$b);