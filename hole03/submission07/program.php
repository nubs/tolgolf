<?while($n=fgetc(STDIN)){$n=ord($n);$p="er than fifty\n";if($n==10){echo$s>50?"high$p":"low$p";$s=0;}else$s+=$n-96;}