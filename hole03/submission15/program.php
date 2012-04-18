<?while($l=trim(fgets(STDIN))){$s=0;for($i=0;$i<strlen($l);)$s+=ord($l{$i++})-96;echo($s>50?"higher":"lower")." than fifty
";}