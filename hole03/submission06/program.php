<?while($n=fgetc(STDIN)){$n=ord($n);$p="er than fifty\n";if($n!=10){$s+=$n-96;}else{echo$s>50?"high$p":"low$p";$s=0;}}