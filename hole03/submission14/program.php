<?function c($k){return $k?ord($k)-96:0;}while($l=fgets(STDIN))echo(array_sum(array_map('c',(array)$l))>50?"higher":"lower")." than fifty\n";