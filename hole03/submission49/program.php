<?$f=fopen("php://stdin","r");while($l=trim(fgets($f))){$s=0;for($i=0;$i<strlen($l);$i++)$s+=ord($l{$i})-ord(a)+1;echo($s>50?"higher":"lower")." than fifty\n";}
